$(document).ready(function(){$(document).mousedown(function(e){0==$(".autocomplete-ul").has(e.target).length&&$(".autocomplete-ul").hide()}),$("#aside-search").keyup(function(){""!=$.trim($(this).val())?$.post("demo/ajax-autocomplete.php",{q:$(this).val()},function(e){$("#aside-autocomplete").show().html(e)}):$("#aside-autocomplete").hide()}),$("#aside-search").keyup(function(){""!=$.trim($(this).val())?$.post("demo/ajax-autocomplete.php",{q:$(this).val()},function(e){$("#aside-autocomplete").show().html(e)}):$("#aside-autocomplete").hide()}),$(document).on("click","#aside-autocomplete>li",function(){window.location.href="search?q="+$(this).html().replaceAll(" ","+")})});
