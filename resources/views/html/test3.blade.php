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
  
  <!--nav bar begin-->
  
  

  <section class="section test-wrap">
    <div class="container col-lg-6">
        <div class="dir-rtl">
          <div class="feature-item ">
            <div class="quiz-container" id="quiz">
              <div class="quiz-header ">
                <h4 id="question">اجلس امام الانترنت لفترات طويله في اليوم الواحد تصل الي عشر ساعات أو اكثر</h4>
                <ul class="list-unstyled">
                  <li class="test-li">
                    <input type="radio" name="answer" id="y" class="answer test-radio">
                    <label for="y" id="y_text" class="test-lable">نعم</label>
                  </li>
                  <li>
                    <input type="radio" name="answer" id="s" class="answer test-radio">
                    <label for="s" id="s_text" class="test-lable">أحياناً</label>
                  </li>
                  <li>
                    <input type="radio" name="answer" id="N" class="answer test-radio">
                    <label for="N" id="N_text" class="test-lable">لا</label>
                  </li>
                </ul>
              </div>
              <button class="btn btn-primary rounded-pill" id="submit">التالي</button>
            </div>
        </div>
    </div>
  </section>

  <div class="container"><!--footer-->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top my-footer">
      <div class="col-md-4 d-flex align-items-center">
        <span class="text-muted">&copy; 2022 Ain Shams Uni. , Faculty of Science,<br> Maths. Department. </span>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <a href="index.html" class="a-no-decor"><img src="../img/icon.png" width="45"></a>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://github.com/AlyaaRushdy/Psyclini"><i class="icofont-github"></i></a></li>
        <li class="ms-3"><a class="text-muted a-no-decor bi" href="https://www.facebook.com/FacultyofScienceASU/"><i class="icofont-facebook"></i></a></li>
      </ul>
    </footer>
  </div>







  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/script.js"></script>
  <script>
  const quizData =[
    "اجلس امام الانترنت لفترات طويله في اليوم الواحد تصل الي عشر ساعات أو اكثر",
    "أشعر أن علاقاتي الاجتماعيه مع اصدقائي ومعارفي اصبحت ضعيفه",
    "أعتقد اني مدمن انترنت , أقاربي و اصحابي يقولون ذلك عني.",
    "التفكير في الانترنت قليلا ما يفارق خيالي حين أتواجد في العمل أو بين أصحابي و أهلي",
    "يصيبني الإجهاد والتعب في يدي أو ضهري من كثره الجلوس أمام الكمبيوتر",
    "أشعر بالرغبه في الحديث عن مغامراتي في الانترنت مع معارفي و اصدقائي",
    "تتملكني الرغبه حين اغلق الكمبيوتر بالعوده اليه بعد قليل",
    "أشعر أني أجد احتراما و اهتماما علي شبكه الانترنت أكثر مما في غيره ",
    "جلوسي علي الانترنت يؤخرني دوما عن مواعيد الطعام او لقاء اصدقائي او النوم",
    "غلق جهاز الكمبوتر او الهاتف هو ما افعله قبل النوم وفتح الجهاز هو اول شيء افعله بعد الاستيقاظ",
    "أشعر من كثره جلوسي أمام الكمبيوتر أن حياتي المهنيه (الدراسيه) متعثره",
    "استمر في الجلوس اما الانترنت حتي لو شعرت ببعض التعب أو النعاس",
    "لا اشعر بالندم حين اجلس لفترات طويله امام الانترنت",
    "جلوسي طويلا امام الانترنت اصابني بالكسل",
    "ينتابني ضيق شديد عند انقطاع النت عني لسبب ما من الاسباب"
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
        if(answer === 'y'){
            score +=2;
        }else if(answer === 's'){
            score++;
        }

        currentQuiz++;
        
        if(currentQuiz < quizData.length){
            loadQuiz();
        }else {
            if(score <= 30 && score >= 21 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل 30 :</h4>
                <p>لديك درجه مرتفعه من أعراض إدمان الانترنت والتي تستلزم تدخلاً إرشادياً لدي متخصصين في الإرشاد النفسي</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }else if(score <= 20 && score >= 16 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل 30 :</h4>
                <p>لديك درجه متوسطة من أعراض إدمان الانترنت ويمكنك التغلب علي تلك الاعراض ببعض السيطرة علي النفس</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
            else if(score <= 15 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل 30 :</h4>
                <p>انت لا تعاني من أعراض إدمان الانترنت وتمارس حياتك بشكل طبيعي وتقوم باستخدام الانترنت استخداما معتدلاً</p>
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
