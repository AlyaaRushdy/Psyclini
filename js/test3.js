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
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="../html/tests.html"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }else if(score <= 20 && score >= 16 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل 30 :</h4>
                <p>لديك درجه متوسطة من أعراض إدمان الانترنت ويمكنك التغلب علي تلك الاعراض ببعض السيطرة علي النفس</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="../html/tests.html"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
            else if(score <= 15 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل 30 :</h4>
                <p>انت لا تعاني من أعراض إدمان الانترنت وتمارس حياتك بشكل طبيعي وتقوم باستخدام الانترنت استخداما معتدلاً</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="../html/tests.html"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
        }
    }

}
)