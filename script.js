function togglediv(id) {
    var x = document.getElementById(id);
        x.style.display = "block";
}


myBlurFunction = function(state) {
  /* state can be 1 or 0 */
  var containerElement = document.getElementById('sfondo');
  var overlayEle = document.getElementById('creapartita');

  if (state) {
      overlayEle.style.display = 'block';
      containerElement.setAttribute('class', 'blur');
  } else {
      overlayEle.style.display = 'none';
      containerElement.setAttribute('class', null);
  }
};

function retogglediv(id){
    var x = document.getElementById(id);
    if (x.style.display == "block"){
        x.style.display = "none";
    }
}

function retogglediv2(id){
    var x = document.getElementById(id);
    x.classList.remove("is-invalid");
}

  function hover_padel(element) {
    var x = document.getElementById(element);
    x.setAttribute('src', 'padel-icon.png');
  }
  
  function unhover_padel(element) {
    var x = document.getElementById(element);
    x.setAttribute('src', 'padel-icon-white.png');
  }

  function hover_tennis(element) {
    var x = document.getElementById(element);
    x.setAttribute('src', 'tennis-icon.png');
  }
  
  function unhover_tennis(element) {
    var x = document.getElementById(element);
    x.setAttribute('src', 'tennis-icon-white.png');
  }

function matchPassword() {  
    var pw1 = document.getElementById("password");  
    var pw2 = document.getElementById("ripeti_password");
    var id = document.getElementById("invalidrippassword");  
    if(pw2.value != pw1.value)  
    {   
      pw2.classList.add("is-invalid");
      id.style.display = 'block';
      return false;
    } 
  }  

function invalidForm(id){
    var x = document.getElementById(id);
    x.classList.add("is-invalid");
}

function validaReg(){
    if(document.formregistrazione.nome.value === ""){
        togglediv("invalidname");
        invalidForm("nome");
        return false;
    }

    if(document.formregistrazione.email.value === ""){
        togglediv("invalidemail");
        invalidForm("email");
        return false;
    }

    if(document.formregistrazione.username.value === ""){
        togglediv("invalidusername");
        invalidForm("username");
        return false;
    }

    if(document.formregistrazione.password.value === ""){
        togglediv("invalidpassword");
        invalidForm("password");
        return false;
    }

    if(document.formregistrazione.ripeti_password.value === ""){
        togglediv("invalidrippassword");
        invalidForm("ripeti_password");
        return false;
    }
    
    var pw1 = document.getElementById("password");  
    var pw2 = document.getElementById("ripeti_password");
    var id = document.getElementById("invalidrippassword");  
    if(pw2.value != pw1.value)  
    {   
      pw2.classList.add("is-invalid");
      id.style.display = 'block';
      return false;
    } 

    return true;
}

function validaReg1(){
  if(document.formregistrazione1.nome1.value === ""){
      togglediv("invalidname1");
      invalidForm("nome1");
      return false;
  }

  if(document.formregistrazione1.email1.value === ""){
      togglediv("invalidemail1");
      invalidForm("email1");
      return false;
  }

  if(document.formregistrazione1.username1.value === ""){
      togglediv("invalidusername1");
      invalidForm("username1");
      return false;
  }

  if(document.formregistrazione1.password1.value === ""){
      togglediv("invalidpassword1");
      invalidForm("password1");
      return false;
  }

  if(document.formregistrazione1.ripeti_password1.value === ""){
      togglediv("invalidrippassword1");
      invalidForm("ripeti_password1");
      return false;
  }
  
  var pw1 = document.getElementById("password1");  
  var pw2 = document.getElementById("ripeti_password1");
  var id = document.getElementById("invalidrippassword1");  
  if(pw2.value != pw1.value)  
  {   
    pw2.classList.add("is-invalid1");
    id.style.display = 'block';
    return false;
  } 

  return true;
}

function validaLogin(){
    if(document.formlogin.email.value === ""){
        togglediv("invalidemail");
        invalidForm("email");
        return false;
    }
    if(document.formlogin.password.value === ""){
        togglediv("invalidpassword");
        invalidForm("password");
        return false;
    }

    return true;
}

function validaLogin1(){
  if(document.formlogin1.email1.value === ""){
      togglediv("invalidemail1");
      invalidForm("email1");
      return false;
  }
  if(document.formlogin1.password1.value === ""){
      togglediv("invalidpassword1");
      invalidForm("password1");
      return false;
  }

  return true;
}

function validaCrea(){
  if(document.formcreapartita.data.value === ""){
      togglediv("invaliddate");
      invalidForm("data");
      return false;
  }
  if(document.formcreapartita.impianto.value === "Choose..."){
    togglediv("invalidpitch");
    invalidForm("impianto");
    return false;
}
if(document.formcreapartita.orario.value === "Choose..."){
  togglediv("invalidhour");
  invalidForm("orario");
  return false;
}
  return true;
}

function validaCrea_mobile(){
  if(document.formcreapartita1.data1.value === ""){
      togglediv("invaliddate1");
      invalidForm("data1");
      return false;
  }
  if(document.formcreapartita1.impianto1.value === "Choose..."){
    togglediv("invalidpitch1");
    invalidForm("impianto1");
    return false;
}
if(document.formcreapartita1.orario1.value === "Choose..."){
  togglediv("invalidhour1");
  invalidForm("orario1");
  return false;
}
  return true;
}

function reloadPage() {
  // The last "domLoading" Time //
  var currentDocumentTimestamp =
  new Date(performance.timing.domLoading).getTime();
  // Current Time //
  var now = Date.now();
  // Ten Seconds //
  var tenSec = 10 * 1000;
  // Plus Ten Seconds //
  var plusTenSec = currentDocumentTimestamp + tenSec;
  if (now > plusTenSec) {
  location.reload();
  } else {}
  }

function value(){
  const params = new URLSearchParams(window.location.search);
  var id = params.get('id');
  document.getElementById("back").value = id;
}

function enable(){
  document.querySelector('#basic-addon1').disabled = false;
}

function enable1(){
  document.querySelector('#basic-addon11').disabled = false;
}

// slideshow
var slideImages = document.getElementsByClassName("slide");
var counter = 0; //set index for timer
var duration = 3500; //set duration

//Hide each slide at first
function hideAllImages() {
  for (var i = 0; i < slideImages.length; i = i + 1) {
    /* console.log(slideImages[i]); */
    slideImages[i].style.opacity = 0;
  }
}

function slideshow() {
  hideAllImages();

  /* go to next slide */
  counter = counter + 1;

  /* reset to first slide when looping */
  if (counter > slideImages.length - 1) {
    counter = 0;
  }

  console.log(counter);

  /* show the current slide */
  slideImages[counter].style.opacity = 1;
}

setInterval(function() {
    slideshow();
}, duration);

function check1()
{
    var string = 'profilo.php?id=' + id;
    var f = document.getElementById("form1");
    f.setAttribute('method',"post");
    f.setAttribute('action', string);
    return true;
}

function check2()
{
  var string = 'profilo.php?id=' + id;
    var f = document.getElementById("form2");
    f.setAttribute('method',"post");
    f.setAttribute('action', string);
    return true;
}

function check3()
{
    var string = 'profilo.php?id=' + id;
    var f = document.getElementById("form3");
    f.setAttribute('method',"post");
    f.setAttribute('action', string);
    return true;
}

function check4()
{
    var string = 'profilo.php?id=' + id;
    var f = document.getElementById("form4");
    f.setAttribute('method',"post");
    f.setAttribute('action', string);
    return true;
}

function check5()
{
    var string = 'profilo.php?id=' + id;
    var f = document.getElementById("form5");
    f.setAttribute('method',"post");
    f.setAttribute('action', string);
    return true;
}
