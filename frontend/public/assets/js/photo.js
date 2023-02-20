$(document).ready(function(){
    var images = [ "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrfSa6WDRdGqm0gh3V8ivI8ggQJlmpf9HWWw&usqp=CAU", "https://i.pinimg.com/originals/4b/ad/a5/4bada5dafa8f1adc51d38a79c826e020.jpg", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlcVXU3YN0nJwKTppO1wRVfE5x7OXzZQcHQiC4792qUaaINlgS-6jYeomFhL3WEQD2XmA&usqp=CAU" ];
    var currentIndex = 0;
    $(".photo_card").click(function() {
        $(".photo_card__header").css('display','none')
        $(".photo_card__description").css('display','none')
        currentIndex = $("#lightbox-img").index(this);
        $("#lightbox-img").attr("src", images[currentIndex]);
        $("#lightbox").fadeIn();
      });
      $("#closeButton").click(function() {
     
        $("#lightbox").fadeOut();
        $(".photo_card__header").css('display','block')
        $(".photo_card__description").css('display','block')
      });
      
      $("#prevButton").click(function() {
        currentIndex--;
        if (currentIndex < 0) {
          currentIndex = images.length - 1;
        }
        $("#lightbox-img").attr("src", images[currentIndex]);
      });
      $("#nextButton").click(function() {
        currentIndex++;
        if (currentIndex >= images.length) {
          currentIndex = 0;
        }
        $("#lightbox-img").attr("src", images[currentIndex]);
      });
})