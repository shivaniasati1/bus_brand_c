var Tickets= [
{no:1 , amount:300},
{no:2 , amount:300},
{no:3 , amount:300},
{no:4 , amount:300},
{no:5 , amount:300},
{no:6 , amount:300},
{no:7 , amount:300},
{no:8 , amount:300},
{no:9 , amount:300},
{no:10 , amount:300},
{no:11 , amount:300},{no:12 , amount:300},{no:13 , amount:300},{no:14 , amount:300},{no:15 , amount:300},{no:16 , amount:300},
{no:17 , amount:300},
{no:18 , amount:300},
{no:19 , amount:300},
{no:20 , amount:300},

{no:21 , amount:300},
{no:22 , amount:300},
{no:23 , amount:300},
{no:24 , amount:300},
{no:25, amount:300},
{no:26 , amount:300},
{no:27 , amount:300},
{no:28 , amount:300},
{no:29 , amount:300},
{no:30 , amount:300},

{no:31 , amount:300},
{no:32 , amount:300},
{no:33 , amount:300},
{no:34 , amount:300},
{no:35, amount:300},
{no:36 , amount:300},
{no:37 , amount:300},
{no:38 , amount:300},
{no:39 , amount:300},
{no:40 , amount:300}
];

str= ``;
Tickets.forEach(function(value,index){
	//console.log(value,index);
	str = str +`
	<div class="seat" for='${value.no}#${value.amount}' onclick='myFun(this)'>${value.no}</div>
	`
})  
document.getElementById('mainDiv').innerHTML=str;
arr1 = [];
arr2 = [];
function myFun(myvar){
	let ans= myvar.attributes.for.value;
	//console.log(ans);
    let ans1= ans.split("#");

    let position = arr1.indexOf(ans1[0]);
    if(position == -1){
    arr1.push(ans1[0]);
    arr2.push(ans1[1]);
    msg= "ticket added";
}
   else
   {
        msg ="ticket already exists";
   }

    document.getElementById("Msg").innerHTML = msg;

    final_no=arr1.join(",");
    document.getElementById("no").value = final_no;

    final_amount=arr2.join("+");
    let total_amount=eval(final_amount);
    document.getElementById("amount").value = total_amount;

    myvar.style.background="red";
}