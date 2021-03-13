//JavaScript code for NewsFlash application
//Uses NewsAPI for data collection
//Change url to access your desired topics and cateories as index startup
var url = 'http://newsapi.org/v2/top-headlines?' +
          'country=us&' +
          'apiKey=fea8531b3b084105a99944ea28a38794';


var request = new Request(url);

async function getData(url) {
  const response = await fetch(url);
  return response.json();
}
async function main(req) {

  var createClickHandler = function(article){
    return function() {
      article.style.display = "block";
      body.classList.add("noscroll");
    }
  }
  var createClickHandler2 = function(article){
    return function() {
      article.style.display = "none";
      body.classList.remove("noscroll");
    }
  }

  const data = await getData(req);
  var div = document.getElementById("art0");
  var artdiv = document.getElementById("articles");
  for (var i = 0; i < data.articles.length; i++) {

    //Headlines
    var item = document.createElement("div");
    item.className = "item";
    item.id = "article" + i;

    //The headline
    var header = document.createElement("div");
    var textdiv = document.createElement('p');
    var headerNode = document.createTextNode(data.articles[i].title);
    header.className = "bg-text";
    textdiv.className = "textdiv";
    textdiv.appendChild(headerNode);
    header.appendChild(textdiv);

    //Image for headline
    var img = document.createElement("img");
    img.src = data.articles[i].urlToImage;
    img.className = "panel";

    //Article overlay
    var artover = document.createElement("div");
    artover.className = "overlay";
    artover.id = "overlay" + i;

    //Text for overlay
    var title = document.createElement("h3");
    var titleNode = document.createTextNode(data.articles[i].title);
    title.appendChild(titleNode);

    var para = document.createElement("p");
    var node = document.createTextNode(data.articles[i].description);

    var anchor = document.createElement("a");
    var anchor_text = document.createTextNode(data.articles[i].source.name);
    anchor.appendChild(anchor_text);
    anchor.href = data.articles[i].url;
    anchor.target = '_blank';

    var author = document.createElement("p");
    var authorNode = document.createTextNode("Full Article: ");
    author.appendChild(authorNode);
    author.appendChild(anchor);

    para.appendChild(img);
    para.appendChild(title);
    para.appendChild(node);
    para.appendChild(author);

    //Adding to HTML
    item.style.background = 'url(' + data.articles[i].urlToImage + ') no-repeat center';
    item.appendChild(header);
    artover.appendChild(para);

    div.appendChild(item);
    artdiv.appendChild(artover);

    //Adding event listeners
    item.onclick = createClickHandler(artover)
    artover.onclick = createClickHandler2(artover)

  }
  console.log(data);
}
//Load API fetch on load
window.onload = function() {
  main(request);
}

function removeDivs() {
  //Removing existing divs
  document.getElementById('articles').remove();
  document.getElementById('art0').remove();

  //Creating fresh divs without data
  var opDiv = document.getElementById('OPdiv');
  var div1 = document.createElement('div');
  div1.id = 'articles';
  var div2 = document.createElement('div');
  div2.id = 'art0';
  div2.className = 'container';

  //Adding to html
  opDiv.appendChild(div1);
  opDiv.appendChild(div2);
}

//Search from input
function search() {
  //Getting input
  var urlSearch = document.getElementById('urlInput');
  var newUrl =  'http://newsapi.org/v2/everything?' +
                'q=' + urlSearch.value + '&' +
                'apiKey=fea8531b3b084105a99944ea28a38794';

  urlSearch.value = "";
  removeDivs();
  //Running request
  main(newUrl);
}

function countrySelect(code) {
  //Getting correct country code
  if (code == 'en') {
    var newUrl =  'http://newsapi.org/v2/top-headlines?' +
                  'lang=en&' +
                  'country=us&' +
                  'apiKey=fea8531b3b084105a99944ea28a38794';
  }
  else if (code == 'no') {
    var newUrl =  'http://newsapi.org/v2/top-headlines?' +
                  'lang=no&' +
                  'country=no&' +
                  'apiKey=fea8531b3b084105a99944ea28a38794';
  }

  removeDivs();
  //Running request
  main(newUrl);
}

function home() {
  cat(request);
}

//Cat click button
function cat(req) {
  removeDivs();
  main(req);
}


$(document).ready(function(){
  //Slider on change
  $('#slider').on('change', function () {
      var v = $(this).val();
      $('.item').css('font-size', v + 'px');
      $('.overlay').css('font-size', v + 'px');

      //Phone screen
      if ($(window).width() < 600) {

        if (v >= 30) {
          $('.bg-text').css('height', 65 + 'vh');
        }
        else {
          $('.bg-text').css('height', 40 + 'vh');
        }
        if (v <= 25) {
          $('.container').css('display', 'grid');
          $('.bg-text').css('height', 30 + 'vh');
        }
        else {
          $('.container').css('display', 'flex');
        }}

      //PC Screen
      else {
        if (v >= 30) {
          $('.container').css('display', 'flex');
          $('.container').css('align-items', 'center');
          $('.item img').css('width', 200 + '%');
          $('.item').css('text-align', 'center');
        }
        else {
          $('.container').css('display', 'grid');
          $('.item img').css('width', 90 + '%');
        }
      }
    });

    //Buttons
    $('#button').click(function() {
        $('body').toggleClass('white');
        $('.bar1, .bar2, .bar3').toggleClass('barmode');
    });

    $('#slide').click(function() {
      $('.panel').slideToggle();
  });

  //Menu settings
  $('.menu').click(function() {
    $('#settings').slideToggle();
    $('.menu').toggleClass('change');
  });


//Category creation
  $('#create').click(function() {
    var text = document.getElementById('name');
    var value = text.value;
    var url = 'http://newsapi.org/v2/everything?' +
              'q=' + value + '&' +
              'apiKey=fea8531b3b084105a99944ea28a38794';

    if (!value) {
      alert("Please write a category name");
    } else {
      $("#nav").append('<a onclick="' + "cat('" + url + "');" + '">' + value + '</a>');
      text.value = "";
    }
    return true;
  });
});

//Category removal... Work in progress


//Scroll to the top of the page when executed
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


//Modal exit click
var modal = document.getElementById('id01');
var setting = document.getElementById('settings');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
