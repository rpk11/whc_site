var q1 = document.getElementById("q1");
var q2 = document.getElementById("q2");
var q3 = document.getElementById("q3");
var q4 = document.getElementById("q4");
var q5 = document.getElementById("q5");
var q6 = document.getElementById("q6");
var q7 = document.getElementById("q7");

q1.style.height = (Math.ceil(q1.offsetHeight / 2) * 2) + "px";
q1.style.width = (Math.ceil(q1.offsetWidth / 2) * 2) + "px";

q2.style.height = (Math.ceil(q2.offsetHeight / 2) * 2) + "px";
q2.style.width = (Math.ceil(q2.offsetWidth / 2) * 2) + "px";

q3.style.height = (Math.ceil(q3.offsetHeight / 2) * 2) + "px";
q3.style.width = (Math.ceil(q3.offsetWidth / 2) * 2) + "px";

q4.style.height = (Math.ceil(q4.offsetHeight / 2) * 2) + "px";
q4.style.width = (Math.ceil(q4.offsetWidth / 2) * 2) + "px";

q5.style.height = (Math.ceil(q5.offsetHeight / 2) * 2) + "px";
q5.style.width = (Math.ceil(q5.offsetWidth / 2) * 2) + "px";

q6.style.height = (Math.ceil(q6.offsetHeight / 2) * 2) + "px";
q6.style.width = (Math.ceil(q6.offsetWidth / 2) * 2) + "px";

q7.style.height = (Math.ceil(q7.offsetHeight / 2) * 2) + "px";
q7.style.width = (Math.ceil(q7.offsetWidth / 2) * 2) + "px";

window.addEventListener('resize', function(event) {
    q1.style.removeProperty('height');
    q1.style.removeProperty('width');
    q2.style.removeProperty('height');
    q2.style.removeProperty('width');
    q3.style.removeProperty('height');
    q3.style.removeProperty('width');
    q4.style.removeProperty('height');
    q4.style.removeProperty('width');
    q5.style.removeProperty('height');
    q5.style.removeProperty('width');
    q6.style.removeProperty('height');
    q6.style.removeProperty('width');
    q7.style.removeProperty('height');
    q7.style.removeProperty('width');
    q1.style.height = (Math.ceil(q1.offsetHeight / 2) * 2) + "px";
    q1.style.width = (Math.ceil(q1.offsetWidth / 2) * 2) + "px";
    q2.style.height = (Math.ceil(q2.offsetHeight / 2) * 2) + "px";
    q2.style.width = (Math.ceil(q2.offsetWidth / 2) * 2) + "px";
    q3.style.height = (Math.ceil(q3.offsetHeight / 2) * 2) + "px";
    q3.style.width = (Math.ceil(q3.offsetWidth / 2) * 2) + "px";
    q4.style.height = (Math.ceil(q4.offsetHeight / 2) * 2) + "px";
    q4.style.width = (Math.ceil(q4.offsetWidth / 2) * 2) + "px";
    q5.style.height = (Math.ceil(q5.offsetHeight / 2) * 2) + "px";
    q5.style.width = (Math.ceil(q5.offsetWidth / 2) * 2) + "px";
    q6.style.height = (Math.ceil(q6.offsetHeight / 2) * 2) + "px";
    q6.style.width = (Math.ceil(q6.offsetWidth / 2) * 2) + "px";
    q7.style.height = (Math.ceil(q7.offsetHeight / 2) * 2) + "px";
    q7.style.width = (Math.ceil(q7.offsetWidth / 2) * 2) + "px";

});