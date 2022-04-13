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
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="../html/tests.html"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }else if(score <= 9 && score >= 5 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل ${quizData.length} :</h4>
                <p>أنت احيانا نشيط و احيانا اخري كسول ننصحك بأن تقرأ أكثر وتعرف أسباب عدم نشاطك</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="../html/tests.html"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
            else if(score < 4 ){
                quiz.innerHTML = `
                <h4>نتيجتك ${score} من اصل ${quizData.length} :</h4>
                <p>أنت شخص كسول تعاني من الخمول في حياتك ننصحك بتغيير نشاطاتك اليوميه و ممارسه القليل من التمارين الرياضيه</p>
                <button class="btn btn-primary rounded-pill" onclick="location.reload()">إعاده الاختبار</button><a href="../html/tests.html"><button class="btn btn-primary rounded-pill">الخروج</button></a>`;
            }
        }
    }

}
)