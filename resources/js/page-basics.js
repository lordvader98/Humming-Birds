$(document).ready(function(){

  //autocomplete outside click
  $(document).mousedown(function(e){
    if($(".autocomplete-ul").has(e.target).length==0){
      $(".autocomplete-ul").hide()
    }
  })

  //aside search autocomplete
  $("#aside-search").keyup(function(){
    if($.trim($(this).val())!=""){
      $.post(
        "demo/ajax-autocomplete.php",
        {q:$(this).val()},
        function(e){
          $("#aside-autocomplete").show().html(e)
        }
      )
    }else{
      $("#aside-autocomplete").hide()
    }
  })

  //aside search autocomplete
  $("#aside-search").keyup(function(){
    if($.trim($(this).val())!=""){
      $.post(
        "demo/ajax-autocomplete.php",
        {q:$(this).val()},
        function(e){
          $("#aside-autocomplete").show().html(e)
        }
      )
    }else{
      $("#aside-autocomplete").hide()
    }
  })

  $(document).on("click","#aside-autocomplete>li",function(){
    window.location.href = "search?q="+$(this).html().replaceAll(" ","+")
  })
})
