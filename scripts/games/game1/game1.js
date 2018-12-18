let score = 0;
let currentQuestion = 0;
let questions =[
    {
        title: "What day did the Spanish Civil War begin?",
        answers: ["May 10, 1936", "July 18, 1936", "June 22, 1939", "May 12, 1936"],
        correct: 1
    },
    {
        title: "What sides faced in the Civil War?",
        answers: ["Socialists and Comunists", "Nacionalists and Republicans", "Monarchicals and Republicans", "Monarchicals and Nacionalists"],
        correct: 1
    },
    {
        title: "What painter was inspired by the Bombarde de Guernica to paint the famous painting El Guernica?",
        answers: ["Pablo Picasso", "Juan Gris", "Salvador Dalí", "Rafael Alberti"],
        correct: 0
    },
    {
        title: "What famous Spanish writer was shot during the Civil War?",
        answers: ["Federico García Lorca", "Juan Ramón Jiménez", "Antonio Machado Ruiz", "Miguel Hernández"],
        correct: 0
    },
    {
        title: "The last big battle of the war civil where was it?",
        answers: ["La Batalla de Guadarrama", "La Batalla de Madrid", "Batalla de Teruel", "La Batalla del Ebro"],
        correct: 3
    },
];


$(document).ready(function(){

    $('.start a').click(function(e){
        e.preventDefault();
        shuffle(questions);
        $('.start').hide();
        $('.time').show();
        $('.quiz').show();
        showQuestion();
        fase1 = false;
        fase2 = false;
        recortes = 0;
        segundos=1;
        summaryShow = false;
        window.setInterval(function(){
            document.getElementById('tiempo').innerHTML = segundos+' s';
            checkTime(segundos);
            segundos++;
        },1000);
    });

    $('.quiz ul').on('click', 'li', function() {
        $('.selected').removeClass('selected');
        $(this).addClass('selected');
        $('#next').show();
    });

    $('#next').click(function(e){
        e.preventDefault();
        if($('li.selected').length){
            //get the id of the selected option
            let guess = parseInt($('li.selected').attr('id'));
            console.log("This is the id the user has choosen: " + guess);
            checkAnswer(guess);
        }
        else{
            alert('Please select an answer');
        }
    });

    // $('#previous').click(function(e){
    //     e.preventDefault();
    //     if($('li.selected').length){
    //         //get the id of the selected option
    //         let guess = parseInt($('li.selected').attr('id'));
    //         console.log("This is the id the user has choosen: " + guess);
    //         let answerguess = [];
    //         answerguess.push(guess);
    //         currentQuestion--;
    //     }
    //     else{
    //         alert('Please select an answer');
    //     }
    // });

    $('.summary a').click(function (e) {
        e.preventDefault();
        restartQuiz();
    });
});

function showQuestion(){
    // if(recortes > 0){
    //     for(var i=0; i<recortes; i++){
    //         questions.pop();
    //     }
    // }
    let question = questions[currentQuestion];
    $('.quiz h2').text(question.title);
    $('.quiz ul').html('');
    for(var i=0; i<question.answers.length; i++){
        if(i%2 == 0){
            $('.quiz ul').append(`<li id="${i}" class="answerodd col-lg-6 col-xs-12">${question.answers[i]}</li>`);
        }
        else{
            $('.quiz ul').append(`<li id="${i}" class="answereven col-lg-6 col-xs-12">${question.answers[i]}</li>`);
        }
    }
    $('.sumbit-answer').hide();
}

function checkAnswer(guess){
    let question = questions[currentQuestion]
    if(question.correct === guess){
        score++
    }
    currentQuestion++;
    if(currentQuestion >= questions.length){
        if(score === questions.length){
            showSuccess();
            summaryShow = false;
        }
        else{
            showSummary();
            summaryShow = true;
        }
        
    }
    else{
        showQuestion();
        summaryShow = false;
    }
}

// function goBack(questionNumber){
//     let selected = index.map(answerguess[questionNumber]);
//     console.log(selected);
// }

function showSummary(){
    $('.quiz').hide();
    $('.summary').show();
    $('#looser').text("You scored " + score + " out of " + questions.length);
}

function showSuccess(){
    $('.quiz').hide();
    $('.success').show();
    $('.time').hide();
    $('.success p').text("Congrats you scored " + score + " out of " + questions.length + " correct!");
}

function restartQuiz(){
    $('.summary').hide();
    $('.quiz').show();
    shuffle(questions);
    score = 0;
    currentQuestion = 0;
    summaryShow = false;
    if(recortes != 2){
        if(fase1 == true){
            recortes = 1;
        }
    }
    else if(fase2 == true){
        recortes = 2;
    }
    showQuestion();
}

function checkTime(tiempo){
    //console.log(tiempo);
    if(tiempo >= 60 && summaryShow === false && recortes === 0){
        $('.delete').show();
        $('#btnDelete').on('click', function() {
           questions.length = 4;
           fase1 = true;
           recortes = 1;
           $('.delete').hide();
        }); 
    }
    else if(tiempo >= 120 && summaryShow === false && recortes === 1){
        $('.delete').show();
        $('#btnDelete').on('click', function() {
           questions.length = 3;
           fase2 = true;
           recortes = 2;
           $('.delete').hide();
        }); 
    }
    console.log("recortes FASE2: " + recortes);
}

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;
  
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
  
      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
  
      // And swap it with the current element.
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
  
    return array;
  }