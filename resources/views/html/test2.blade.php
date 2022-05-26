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
    <div class="container col-lg-8">
      <div class="dir-rtl test-2">
        <div class=" feature-item ">
          <div class="quiz-container" id="quiz">
            <div class="quiz-header">
              <h4 id="question">الاكتئاب</h4>
              <ul class="list-unstyled">
                <li>
                  <input type="radio" name="answer" id="y" class="answer test-radio">
                  <label for="y" id="y_text" class="test-lable">نعم</label>
                </li>
                <li>
                  <input type="radio" name="answer" id="m" class="answer test-radio">
                  <label for="m" id="m_text" class="test-lable">احيانا</label>
                </li>
                <li>
                  <input type="radio" name="answer" id="s" class="answer test-radio">
                  <label for="s" id="s_text" class="test-lable">كثيرا</label>
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
    {
        
        question:"قم بالإجابه علي الأسئله بناءاً علي شعورك خلال هذا الأسبوع",
        y: "إنني لا أشعر بالحزن",
        m: "إنني أشعر بالحزن في بعض الأوقات",
        s: "أشعر بالحزن طيلة الوقت و انتظر التخلص من هذا الشعور",
        N: "إنني أشعر بالحزن والتعاسة لدرجه لا استطيع احتمالها",
    },
    {
        question: "التشائم بشأن المستقبل",
        y: "إنني لست متشائما بشأن المستقبل",
        m: "أشعر بالتشاؤم بشأن المستقبل",
        s: "أشعر أنه لا يوجد لدي ما أطمح للوصول إليه",
        N: "أشعر بأن لا أمل في المستقبل وأن هذا الوضع مستحيل تغييره",
    },
    {
        question:"تشعر بأنك فاشل ؟",
        y: "لا أشعر بأنني فاشل بشكل عام",
        m: "أشعر بأنني أواجه من الفشل أكثر مما يواجهه الإنسان العادي",
        s: "عندما أنظر إالي حياتي الماضيه, فإن كل ما أراه الكثير من الفشل",
        N: "أشعر بأنني إنسان فاشل فشلاً تاماً",
    },
    {
        question:"الشعور بالرضا",
        y: "مازالت الأشياء تعطيني شعوراً بالرضي كما كانت عادة",
        m: "لا أشعر بمتعه في الأشياء علي النحو الذي كنت أشعر به عادةً",
        s: "لم أعد أشعر بأية متعه حقيقة في أي شئ علي الأطلاق",
        N: "لدي شعور بعدم الرضا و الملل من كل الأشياء",
    },
    {
        question: "الشعور بالذنب",
        y: "لا يوجد لدي أي شعور بالذنب",
        m: "أشعر بالذنب في بعض الأوقات",
        s: "أشعر بالذنب في معظم الأوقات",
        N: "أشعر بالذنب في كافة الأوقات",
    },
    {
        question:"تشعر أنك تستحق عقابا من اي نوع؟",
        y:"لا",
        m: "احياناً",
        s: "كثيراً",
        N: "أحس بأنني أعاقب وأعذب في حياتي و أنني استحق ذلك",
    },
    {
        question:"تشعر بخيبه امل في نفسك؟",
        y: "لا",
        m: "نعم",
        s: "أشعر احياناً بأنني اكره نفسي",
        N: "أنني أكره نفسي في كل الأوقات",
    },
    {
        question:"تشعر أنك اسوء من الاخرين؟",
        y: "لا",
        m: "أنني انتقد نفسي بسبب ما لدي من أخطاء و ضعف",
        s: "ألوم نفسي طيلةالوقت بسبب أخطائي",
        N: "ألوم نفسي في كل شئ يحدث حتي لو لم يكن لي علاقة مباشرة بذلك",
    },
    {
        question:"الافكار الانتحاريه",
        y: "لا يوجد لدي أي أفكار انتحارية",
        m: "توجد لدي أفكار انتحارية ولكني لن أقوم بتنفيذها",
        s: "أرغب في قتل نفسي",
        N: "سأقتل نفسي إذا توفرت لي الفرصة السامحة لذلك",
    },
    {
        question:"البكاء",
        y: "لا أبكي أكثر من المعتاد",
        m: "أبكي في هذه الأيام أكثر من المعتاد",
        s: "أنني أبكي طيلة الوقت هذه الأيام",
        N: "لا أستطيع البكاء هذه الأيام مع أنني أريد ذلك",
    },
    {
        question:"هل انت سريع الغضب",
        y: "لا أشعر في هذه الأيام بأنني سريع الغضب أكثر من المعتاد",
        m: "أصبح غضبي يستثار بسهولة أكثر من المعتاد هذه الايام",
        s: "أشعر بسرعه الاستثارة طيلة الوقت في هذه الأيام",
        N: "أحس بأن مشاعري قد تبدلت ولم يعد شئ يغضبني",
    },
    {
        question:"فقدت اهتمامك بالاخرين من حولك",
        y: "لا",
        m: "أصبحت أقل اهتماماً بالناس الاخرين مما كنت عليه",
        s: "فقدت معظم اهتمامي بالناس الاخرين",
        N: "فقدت كل اهتمام لي بالناس الاخرين",
    },
    {
        question:"هل يعجبك مظهرك الخارجي ؟",
        y: "أشعر أن مظهري مناسب كما كان عادة",
        m: "يزعجني الشعور بأنني كهلا أو غير جذاب",
        s: "أشعر أن هنالك تغيرات دائمه في وتجعلني أبدو غير جذاب",
        N: "أعتقد بأنني أبدو قبيحاً",
    },
    {
        question:"كفاءتك في العمل اقل من المعتاد؟",
        y: "استطيع العمل بنفس الكفاءه كما كنت افعل عادة",
        m: "أحتاج إلي تعزيزإضافي كي أبدأ العمل في أي شئ",
        s: "علي أن أحث نفسي بشده كي أقوم بعمل أي شئ",
        N: "لا أستطيع عمل أو انجاز أي شئ علي الإطلاق",
    },
    {
        question:"تعاني من صعوبه في النوم؟",
        y: "أستطيع النوم جيداً كالمعتاد",
        m: "لا أنام جيدا كالمعتاد",
        s: "أستيقظ أبكر بساعة عن المعتاد ولا استطيع العودة إالي النوم",
        N: "أستيقظ من النوم أبكر بساعات عديدة عن المعتاد ولا أستطع النوم",
    },
    {
        question:"تشعر انك اكثر تعبا من المعتاد لدرجه لا تستطيع عمل اي شئ؟",
        y: "لا",
        m: "أصبحت أتعب أكثر من المعتاد",
        s: "أصبحت أتعب من عمل أي شئ تقريباً",
        N: "أنا متعب جداً لدرجة لا أستطيع عمل أي شئ",
    },
    {
        question:"شهيتك للطعام متغيره",
        y: "لا, شهيتي كالمعتاد",
        m: "شهيتي للطعام ليست جيدة كما هي عادة",
        s: "شهيتي للطعام سيئه جداً هذه الأيام",
        N: "ليست لدي شهية للطعام علي الإطلاق في هذه الأيام",
    },
    {
        question:"فقدت أو اكتسبت الوزن مؤخراً",
        y: "لا",
        m: "فقدت (اكتسبت ) من وزني حوالي 2 كغم",
        s: "فقدت (اكتسبت ) من وزني حوالي 4 كغم",
        N: "فقدت من الآلام و الأوجاع حوالي 6 كغم",
    },
    {
        question:"فقدت اهتمامك باشيائك المفضله كالقراءه مثلا",
        y: "لا",
        m: "نعم أصبحت أقل اهتماماً",
        s: "اهتمامي قليل جداً",
        N: "فقدت اهتمامي تماماً",
    },
    {
        question:"وضعك الصحي ليس علي ما يرام",
        y: "ليس لدي إنزعاج يتعلق بصحتي أكثر من المعتاد",
        m: "إنني منزعج بشأن مشكلات صحية كآلام المعدة",
        s: "يوجد مشكلات صحية ومن الصعب أن أفكر في أي شئ أخر",
        N: "انا قلق للغاية بسبب وضعي الصحي ولاأستطيع التفكير في أي شئ",
    }
];


const quiz = document.getElementById('quiz') ,
    answerEls = document.querySelectorAll('.answer'),
    quistionE1 = document.getElementById('question'),
    y_text = document.getElementById('y_text'),
    m_text = document.getElementById('m_text'),
    s_text = document.getElementById('s_text'),
    N_text = document.getElementById('N_text'),
    submitBtn = document.getElementById('submit');

let currentQuiz = 0,
    score = 0;

loadQuiz();

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
};

function loadQuiz(){

    deselectAnswers();

    const currentQuizData = quizData[currentQuiz];
    quistionE1.innerText = currentQuizData.question;
    y_text.innerText = currentQuizData.y;
    m_text.innerText = currentQuizData.m;
    s_text.innerText = currentQuizData.s;
    N_text.innerText = currentQuizData.N;

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
    if(answer) {
        if(answer === 'm'){
            score ++;
        }else if (answer === 's'){
            score += 2;
        }else if (answer === 'N'){
            score += 3;
        }

        currentQuiz++;
        
        if(currentQuiz < quizData.length){
            loadQuiz();
        }else {
            if(score > 23 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من 60 :  ( اكتئاب شديد )</h4>
                <p>يؤسفنا إبلاغك أنك تعاني من الاكتئاب, ننصحك بمراقبة حالتك و التوجه لطبيب مختص</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }else if(score <= 23 && score >= 16 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من 60 :  ( اكتئاب متوسط )</h4>
                <p>أنت تعاني من الاكتئاب بمستوي متوسط, ولكن هذه ليست نهاية العالم, ننصحك بزيارة طبيب مختص والتحدث عما يدور بذهنك للتحسين من حالتك.</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
            else if(score <= 15 && score >= 10 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من 60 :  ( اكتئاب ضعيف )</h4>
                <p>أنت قريب من تشخيصك كمصاب بالاكتئاب, ننصحك بتغيير روتينك اليومي أو يمكنك التحدث مع شخص قريب منك عن شعورك الحالي. </p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="{{route('tests')}}"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }else if(score < 10 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من 60 :  ( لا يوجد اكتئاب )</h4>
                <p>أنت غير مصاب بالاكتئاب ولكنك تعاني بالتأكيد من اضطرابات خفيفة في مزاجك, يمكنك محاوله القيام بشئ تستمع به لتحسين مزاجك.</p>
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