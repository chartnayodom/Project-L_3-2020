var cpu_prices= new Array();
cpu_prices["CPU"]=0;
cpu_prices["I3"]=1300;
cpu_prices["I5"]=1500;
cpu_prices["I7"]=1700;

var main_prices = new Array();
main_prices["mainboard"]=0;
main_prices["mainboard1"]=1500;
main_prices["mainboard2"]=1600;
main_prices["mainboard3"]=1700;

var card_prices =new Array();
card_prices["VGA"]=0;
card_prices["G1030"]=1950;
card_prices["G1650"]=4670;
card_prices["G1660"]=6750;

var memory_prices =new Array();
memory_prices["memory"]=0;
memory_prices["DDR48"]=1400;
memory_prices["DDR416"]=5200;

var harddisk_prices =new Array();
harddisk_prices["harddisk"]=0;
harddisk_prices["1TB"]=1200;
harddisk_prices["2TB"]=1890;
//------------------------------------------------------------------------//
function getcpuPrice()
{
    var cpuPrice=0;
    var theForm = document.forms["comwutform"];
    var selectedcpu = theForm.elements["cpu"];
    cpuPrice = cpu_prices[selectedcpu.value];
    return cpuPrice;
}

function getmainboardPrice(){
    var mainboardPrice=0;
    var theForm = document.forms["comwutform"];
    var selectedmainboard = theForm.elements["mainboard"];
    mainboardPrice = main_prices[selectedmainboard.value];
    return mainboardPrice;
}

function getcardPrice(){
    var cardPrice=0;
    var theForm = document.forms["comwutform"];
    var selectedcard = theForm.elements["card"];
    cardPrice = card_prices[selectedcard.value];
    return cardPrice;
}

function getmemoryPrice(){
    var memoryPrice=0;
    var theForm = document.forms["comwutform"];
    var selectedmemory = theForm.elements["memory"];
    memoryPrice = memory_prices[selectedmemory.value];
    return memoryPrice;
}

function getharddiskPrice()
{
    var harddiskPrice=0;
    var theForm = document.forms["comwutform"];
    var selectedharddisk = theForm.elements["harddisk"];
    harddiskPrice = harddisk_prices[selectedharddisk.value];
    return harddiskPrice;
}
//------------------------------------------------------------------------//
function calculateTotal()
{
    var comprice =getcpuPrice() + getmainboardPrice() + getcardPrice() + getmemoryPrice() + getharddiskPrice();
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the com ฿"+ comprice;
}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}