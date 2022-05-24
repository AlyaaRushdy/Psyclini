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
              <div class="quiz-header ">
                <h4 id="question">أشعر أنني حر في أن أقرر بنفسي أموري الخاصة</h4>
                <ul class="list-unstyled">
                  <li class="test-li">
                    <input type="radio" name="answer" id="y" class="answer test-radio">
                    <label for="y" id="y_text" class="test-lable">دائماً</label>
                  </li>
                  <li>
                    <input type="radio" name="answer" id="m" class="answer test-radio">
                    <label for="m" id="m_text" class="test-lable">غالباً</label>
                  </li>
                  <li>
                    <input type="radio" name="answer" id="s" class="answer test-radio">
                    <label for="s" id="s_text" class="test-lable">أحياناً</label>
                  </li>
                  <li>
                    <input type="radio" name="answer" id="r" class="answer test-radio">
                    <label for="r" id="r_text" class="test-lable">نادراً</label>
                  </li>
                  <li>
                    <input type="radio" name="answer" id="N" class="answer test-radio">
                    <label for="N" id="N_text" class="test-lable">أبداً</label>
                  </li>
                </ul>
              </div>
              <button class="btn btn-primary rounded-pill" id="submit">التالي</button>
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
        <li class="ms-3"><a class="text-muted a-no-decor " href="https://github.com/AlyaaRushdy/Psyclini"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 18 18">
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
    "أشعر أنني حر في أن أقرر بنفسي أموري الخاصة",
    "أحب الناس الذين أتعامل معهم",
    "أشعر بالكفاءة وقوة في قدراتي",
    "لا أشعر بالضغط في حياتي",
    "يمتدح ويقدر الناس الذي يعرفونني ما أقوم به",
    "أكون علي  وفاق مع الناس الذين أتعامل معهم",
    "أفُضل أن أقيم علاقات اجتماعية كثيرة",
    "عموماً أشعر بالحرية في التعبير عن أفكاري و ارائي",
    "أعتبر أن الناس اللذين أتعامل معهم باستمرار أصدقاء لي",
    "لدي القدرة علي تعلم مهارات جديدة و مفيدة",
    "لا اضطر إلي تنفيذ ما يطلبه الاخرون في حياتي اليومية",
    "أجد الاهتمام الكافي من الناس اللذين أتعامل معهم",
    "أشعر معظم الأيام بقيمة الإنجاز الذي احققه",
    "يحترم الناس الذين أتعامل معهم في حياتي اليومية مشاعري الخاصة",
    "أحصل علي الكثير من الفرص حتي أظهر قدراتي و كفاءتي",
    "يوجد الكثير من االناس الذين اعتبرهم أصدقاء مقربين مني",
    "أنفذ ما أريده وما هو مناسب لي في مواقف حياتي اليومية",
    "يبدو علي الناس الذين اتعامل معهم باستمرار أنهم يحبونني كثيراً",
    "أشعر أنني أمتلك الكثير من القدرات العالية",
    "يتاح لي الكثير من الفرص لكي أتخذ قراراتي بنفسي",
    "الناس عموما ودودون ولطفون تجاهي"
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

/*
y -> 5
m -> 4
s -> 3
r -> 2
N -> 1
*/
submitBtn.addEventListener('click' , () => {
    const answer = getSelected();
    if(answer){
        if(answer === 'y'){
            score +=5;
        }else if(answer === 'm'){
            score +=4;
        }else if(answer === 's'){
            score +=3;
        }else if(answer === 'r'){
            score +=2;
        }else if(answer === 'N'){
            score++;
        }

        currentQuiz++;
        
        if(currentQuiz < quizData.length){
            loadQuiz();
        }else {
            quiz.innerHTML = `
            <h4>نتيجتك ${score}  :</h4>
            <p>إذا اقتربتك نتيجتك من (105) فإن حاجتك النفسيه ملبية بدرجة كبيرة, و إذا اقتربت من(21) فإن حاجتك النفسيه غير ملبية بتاتاً</p>
            <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
        }
    }

}
)
  </script>
</body>
</html>


@endsection