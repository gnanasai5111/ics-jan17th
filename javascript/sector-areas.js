// sectorareas
var sectorBox = $(".sector-box");
var sectorWrap = $(".sector-img-wrap");
// console.log(sectorWrap.length);
sectorBox.mouseover(function() {
  // $(this).children("a.sector-box-areas").css("background-color","rgba(249, 249, 249, 0.5)");
  $(this).children("a.sector-box-areas").css("background-color", "rgba(85, 96, 105, 0.5)");
  $(this).find("i.sector-icons").css("color", "#fff");
  $(this).find("span.sector-box-text").css("color", "#fff");
  $(this).find("span.sector-box-line").animate({
    marginLeft: '100px',
    opacity: '0'
  }, 10);


  removeSectorVisible();
  $('.sector-img-wrap').eq($(this).index() - 1).addClass("visible");

  $('.home-page-sectorareas').css("background-image", `url(images/icsexcels/${a}.jpg)`);
  // $('.sector-img-wrap').css("background-image")
});

function removeSectorVisible() {
  $('.sector-img-wrap').removeClass("visible");
}
sectorBox.mouseout(function() {
  // $(this).children("a.sector-box-areas").css("background-color","rgba(85, 96, 105, 0.5)");
  $(this).children("a.sector-box-areas").css("background-color", "rgba(249, 249, 249, 0.5)");
  $(this).find("i.sector-icons").css("color", "#000");
  $(this).find("span.sector-box-text").css("color", "#414655");
  $(this).find("span.sector-box-line").animate({
    marginLeft: '0px',
    opacity: '1'
  }, 10);

});
var Hardware = $(".Hardware");
Hardware.mouseover(function() {
  $(this).find("img.sector-icons").css("filter", "invert(1)");
});
Hardware.mouseout(function() {
  $(this).find("img.sector-icons").css("filter", "invert(0)");
});



// home page text fadein and  falling animation

const content = $(".item").find(".home-overlay-content");

const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0.4
}
var observer = new IntersectionObserver((entries, observer) => {

  entries.forEach((entry) => {
    console.log(entries);

    if (entry.isIntersecting) {
      entry.target.classList.add("fadeup");

    } else {
      entry.target.classList.remove("fadeup");

    }

  });


}, options);

for (var i = 0; i < content.length; i++) {
  observer.observe(content[i]);

}



$(window).scroll(function(){
  if (window.innerWidth > 576) {

    if(isElementOutViewport(footer)){
      $('#sticky').addClass('stick');

      $('.v-tab-pane').css("marginLeft", "25%");
    }
    else{
      $('#sticky').removeClass('stick');

      $('.v-tab-pane').css("marginLeft", "0");
    }
  }

});

function isElementOutViewport (el) {
  console.log(el);
    var rect = el.getBoundingClientRect();
    return rect.bottom < 0 || rect.right < 0 || rect.left > window.innerWidth || rect.top > window.innerHeight;
}


$('.v-tab-link').mouseover(function() {


  var target = $($(this).data('target')),
    tabLink = $('.v-tab-link[data-target="' + $(this).data('target') + '"]');

  tabPanelToShow(tabLink);
  tabLinkToActivate(target);

});
$('.v-tab-link').click(function() {

  var target = $($(this).data('target')),
    tabLink = $('.v-tab-link[data-target="' + $(this).data('target') + '"]');

  tabPanelToShow(tabLink);
  tabLinkToActivate(target);

});




var tabPanelToShow = function(elem) {
  $('.v-tab-link').removeClass('active').parent().find(elem).addClass('active');
    // $('.v-tab-link').toggleClass('active');
    // $('.v-tab-link').parent().find(elem).toggleClass('active');
};

var tabLinkToActivate = function(elem) {
  $('.v-tab-pane').children('div').removeClass('show').parent().find(elem).addClass('show');
  //   $('.v-tab-pane').children('div').toggleClass('show');
  // $('.v-tab-pane').children('div').parent().find(elem).toggleClass('show');

};






$('.v-tab-link1').mouseover(function() {


  var target = $($(this).data('target')),
    tabLink = $('.v-tab-link1[data-target="' + $(this).data('target') + '"]');

  tabPanelToShow1(tabLink);
  tabLinkToActivate1(target);

});
$('.v-tab-link1').click(function() {

  var target = $($(this).data('target')),
    tabLink = $('.v-tab-link1[data-target="' + $(this).data('target') + '"]');

  tabPanelToShow1(tabLink);
  tabLinkToActivate1(target);

});




var tabPanelToShow1 = function(elem) {

  $('.v-tab-link1').removeClass('active').parent().find(elem).addClass('active');

};

var tabLinkToActivate1 = function(elem) {
  $('.v-tab-pane1').children('div').removeClass('show').parent().find(elem).addClass('show');

};





$('.v-tab-link2').mouseover(function() {


  var target = $($(this).data('target')),
    tabLink = $('.v-tab-link2[data-target="' + $(this).data('target') + '"]');

  tabPanelToShow2(tabLink);
  tabLinkToActivate2(target);

});
$('.v-tab-link2').click(function() {

  var target = $($(this).data('target')),
    tabLink = $('.v-tab-link2[data-target="' + $(this).data('target') + '"]');

  tabPanelToShow2(tabLink);
  tabLinkToActivate2(target);

});




var tabPanelToShow2 = function(elem) {

  $('.v-tab-link2').removeClass('active').parent().find(elem).addClass('active');

};

var tabLinkToActivate2 = function(elem) {
  $('.v-tab-pane2').children('div').removeClass('show').parent().find(elem).addClass('show');

};
