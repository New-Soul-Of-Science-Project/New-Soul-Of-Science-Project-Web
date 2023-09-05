
// #: Name:  "GoogleTranlatePatch.js"
// Idea and source code see: https://stackoverflow.com/questions/51667822/is-there-any-way-for-more-than-one-google-translate-widget-to-be-loaded-on-a-pag


// store google translate's change event
trackChange = null;
pageDelayed = 3000;

// overwrite prototype to snoop, reset after we find it (keep this right before translate init)
Element.prototype._addEventListener = Element.prototype.addEventListener;
Element.prototype.addEventListener = function(a, b, c) {
  reset = false;

  // filter out first change event
  if (a == 'change'){
    trackChange = b;
    reset = true;
  }

  if(c==undefined)
    c=false;

  this._addEventListener(a, b, c);

  if(!this.eventListenerList)
    this.eventListenerList = {};

  if(!this.eventListenerList[a])
    this.eventListenerList[a] = [];

  this.eventListenerList[a].push({listener: b, useCapture: c});

  if (reset){
    Element.prototype.addEventListener = Element.prototype._addEventListener;
  }
};


function googleTranslateElementInit() {
  // new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
  // added by Wolle
  new google.translate.TranslateElement(({pageLanguage: 'de', gaTrack: true, gaId: 'UA-5051897-3'}, 'google_translate_element'));
  
  // added by Wolle
  // correct Google navigator right overflow
  To_f_googleTranslateCorrect();


  let first = $('#google_translate_element');
  let second = $('#google_translate_element_content');

  let nowChanging = false;

  // we need to let it load, since it'll be in footer a small delay shouldn't be a problem
  setTimeout(function(){
    select = first.find('select');
    // lets clone the translate select
    second.html(first.clone());
    second.find('select').val(select.val());

    // add our own event change
    first.find('select').on('change', function(event){
      if (nowChanging == false){
        second.find('select').val($(this).val());
      }
      return true;
    });

    second.find('select').on('change', function(event){
      if (nowChanging){
        return;
      }

      nowChanging = true;
      first.find('select').val($(this).val());
      trackChange();

      // give this some timeout incase changing events try to hit each other
      setTimeout(function(){
        nowChanging = false;
      }, 1000);

    });
  }, pageDelayed);
}
