const candidate_image = document.getElementById('candidateImage')
const candidate_number = document.getElementById('candidateNumber')
//
var candidate_id;

function getCandidate(){
    $.ajax({
        url: "api/production.php?getCandidate=1",
        method: "GET",
        dataType: 'JSON',
        success: function(response){
            if(response.status){
                candidate_image.setAttribute('src', response.data.image)
                candidate_number.innerText = response.data.number
                candidate_id = response.data.id
                window. location. href = '/tabulation/judges/playsuit.php'
            } else{
                window. location. href = '/tabulation/judges/playsuit.php'
            }
        },
        error: function(err){
            console.log(err, "test")
        }
    })
}
getCandidate()


var total = null;

const score1 = document.getElementById('score1')
const score2 = document.getElementById('score2')
const score3 = document.getElementById('score3')
const score4 = document.getElementById('score4')



score1.addEventListener('input',(e) =>{
    computeTotal()
    console.log(candidate_id)
})
score2.addEventListener('input',(e) =>{
    computeTotal()
})
score3.addEventListener('input',(e) =>{
    computeTotal()
})

score4.addEventListener('input',(e) =>{
    computeTotal()
})

function computeTotal(){
    const totalScore = document.getElementById('totalScore')

    total = (isNaN(parseInt(score1.value)) ? parseInt(0) : parseInt(score1.value)) + (isNaN(parseInt(score2.value)) ? parseInt(0) : parseInt(score2.value)) + (isNaN(parseInt(score3.value)) ? parseInt(0) : parseInt(score3.value)) + (isNaN(parseInt(score4.value)) ? parseInt(0) : parseInt(score4.value))

    totalScore.value = total
}

const submitProduction = document.getElementById('submitProduction');

submitProduction.addEventListener('submit', (e) => {
    e.preventDefault();
    
    $.ajax({
        url: "api/production.php",
        method: "POST",
        dataType: 'json',
        data:{
            judgeId : 1,
            candidateId: candidate_id,
            score: {
                score1 : score1.value,
                score2 : score2.value,
                score3 : score3.value,
                score4 : score4.value,
                totalScore : total
            }
        },
        success: function(response){
            console.log(response)
            if(response.status){
                setTimeout(function() {
                    location.reload()
                }, 1000)
                toastr.success('Data recorded')
            } else{
                toastr.error('Something wrong!')
            }
        },
        error: function(err){
            console.log(err, "test")
        }
    })
})

let i = 0;

function reload(){
    (i == 2 ? location.reload() : i++)
    console.log("chcker")
}