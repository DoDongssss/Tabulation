
const contestantListContainer = document.getElementById('contestantList')


function getCandidates(){
    $.ajax({
        url: "api/getCandidates.php?getCandidates=1",
        method: "GET",
        dataType: 'html',
        success: function(response){
            if(response.status){
                contestantListContainer.innerHTML = response
            }
            contestantListContainer.innerHTML = response
        },
        error: function(err){
            console.log(err, "test")
        }
    })
}

getCandidates()