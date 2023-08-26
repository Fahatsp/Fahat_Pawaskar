const endDate = "22 JULY 2023 10:00 PM"

document.getElementById("end-date").innerText = endDate;
const input = document.querySelectorAll("input")

function clock(){
    const end = new Date(endDate)
    const now = new Date()
    const diff = (end - now) / 1000;
    
    if (diff < 0) return; //for not going in negetive
    //for days
    input[0].value =  Math.floor(diff / 3600 / 24);
    //for hours
    input[1].value =  Math.floor(diff / 3600) % 24;
    ///for minutes
    input[2].value =  Math.floor(diff / 60) % 60;
    //for seconds
    input[3].value =  Math.floor(diff) %  60;
}
//initial call
clock()

//for calling every seconds
setInterval(
    () => {
        clock()
    },
   1000
)