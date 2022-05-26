@extends('layouts.app')
@section('content')
    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/home_style.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="icon" href="../img/icon.png">
    <title>Psyclini</title>
    
</head>
<body id="bootstrap-overrides top">
  
  

  <section class="section test-wrap">
    <div class="container col-lg-6">
      <div class="dir-rtl">
        <div class="feature-item ">
          <div class="quiz-container" id="quiz">
            <div class="quiz-header">
              <h4 id="question">هل تشعر كثيرا بالرغبه في النوم والنعاس؟</h4>
              <ul class="list-unstyled">
                <li>
                  <input type="radio" name="answer" id="y" class="answer test-radio">
                  <label for="y" id="y_text" class="test-lable">نعم</label>
                </li>
                <li>
                  <input type="radio" name="answer" id="N" class="answer test-radio">
                  <label for="N" id="N_text" class="test-lable">لا</label>
                </li>
              </ul>
            </div>
            <button id="submit" class="btn btn-primary rounded-pill">التالي</button>
          </div> 
        </div>
      </div>
   </div>
  </section>

  <!--footer begin-->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="{{ url('/') }}" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4  justify-content-end d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor " href="https://github.com/AlyaaRushdy/Psyclini/tree/Final"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 18 18">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
          </svg></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor " href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>
  <!--footer end-->







  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
  <script>
  const quizData =[
    "هل تشعر كثيرا بالرغبة في النوم والنعاس ؟",
    "هل تعيش في منطقة مكتظة بالسيارات ؟",
    "هل تحب السهر والنوم المنأخر ؟",
    "هل تجلس امام التلفزيون كثيرا ؟",
    "هل تعاني من الاكتئاب ؟",
    "هل تري ان المشكلات التي تحيط بك أكبر منك ؟",
    "هل تعتمد علي الاخرين في مهام المنزل ؟ ",
    "هل تؤمن بالمثل الشعبي \" كل تأخيره وفيها خيره\" ؟",
    "هل تعتبر نفسك من المتشائمين ؟",
    "هل تتناول طعام الإفطار في الصباح ؟",
    "لا تحب شعار لا تؤجل عمل اليوم الي الغد ؟",
    "هل وزنك لا يتناسب مع طولك ؟",
    "لا تحب ممارسه التمارين الرياضيه بشكل منتظم ؟"
];
    


const quiz = document.getElementById('quiz') ,
    answerEls = document.querySelectorAll('.answer'),
    quistionE1 = document.getElementById('question'),
    submitBtn = document.getElementById('submit');

let currentQuiz = 0,
    score = 0;

loadQuiz();

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
};

function loadQuiz(){
    deselectAnswers();
    quistionE1.innerText = quizData[currentQuiz];
}

function getSelected(){
    let answer;
    answerEls.forEach(answerEl => {
        if(answerEl.checked){
            answer = answerEl.id;
        }
    })
    return answer;
}

submitBtn.addEventListener('click' , () => {
    const answer = getSelected();
    if(answer){
        if(answer === 'N'){
            score++;
        }

        currentQuiz++;
        
        if(currentQuiz < quizData.length){
            loadQuiz();
        }else {
            if(score >= 10 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل ${quizData.length} :</h4>
                <p>تهانينا انت شخص نشيط وغير كسول ولا تعاني الخمول ,استمر علي نمط حياتك هذا مع زياده التمارين الرياضيه وجعلها بشكل منتظم</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }else if(score <= 9 && score >= 5 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل ${quizData.length} :</h4>
                <p>أنت احيانا نشيط و احيانا اخري كسول ننصحك بأن تقرأ أكثر وتعرف أسباب عدم نشاطك</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
            else if(score < 4 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل ${quizData.length} :</h4>
                <p>أنت شخص كسول تعاني من الخمول في حياتك ننصحك بتغيير نشاطاتك اليوميه و ممارسه القليل من التمارين الرياضيه</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
        }
    }

}
)  
  </script> 


</body>
</html>


@endsection