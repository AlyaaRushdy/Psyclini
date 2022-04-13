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
            <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="../html/tests.html"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
        }
    }

}
)