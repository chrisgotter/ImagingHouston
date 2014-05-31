/**
 * JQuery script providing slide toggle functionality to definition and 
 * locations.
 */
$(document).ready(function ()
{
  init();
  var clicked = false;
  
  var up_dt = function ()
  {
    if (!clicked)
    {
      $("dd").stop(true, true);
      $(this).next().slideUp();
    }
  };
  var down_dt = function ()
  {
    if (!clicked)
    {
      $("dd").stop(true, true);
      $(this).next().slideDown();
    }
  };

  var up_dd = function ()
  {
    if (!clicked)
    {
      $("dd").stop(true, true);
      $(this).slideUp();
    }
  };
  var down_dd = function ()
  {
    if (!clicked)
    {
      $("dd").stop(true, true);
      $(this).slideDown();
    }
  };

  $("dt").click(function ()
  {
    $("dd").stop(true, true);
    if (clicked)
    {


      $(this).mouseenter(null);
      $(this).mouseleave(null);
      $(this).next().mouseenter(null);
      $(this).next().mouseleave(null);
      $(this).next().slideUp();
    }
    else
    {

      $(this).next().mouseenter(down_dd);
      $(this).next().mouseleave(up_dd);
      $(this).mouseenter(down_dt);
      $(this).mouseleave(up_dt);
      $(this).next().slideDown();

    }
    clicked = !clicked;
  });

  $("dt").focus(function ()
  {
    $("dd").stop(true, true);
    $(this).next().slideDown();
  });
  $("dt").mouseenter(down_dt);
  $("dt").mouseleave(up_dt);

  $("dd").mouseenter(down_dd);
  $("dd").mouseleave(up_dd);



  $("a.definition").click(function ()
  {
    $("dd").stop(true, true);
    var id = (definition === null ? "glossary.php" : "") + "#" + this.href.split("#").pop();
    $(id).next().slideDown();
    $(id).mouseenter(null);
    $(id).mouseleave(null);
    $(id).next().mouseenter(null);
    $(id).next().mouseleave(null);

    clicked = true;
  });
  
});

/**
 * Slide down a set of fields.
 *
 * @param ...Element arguments - A list of Elements to be opened.
 * @return void
 */
function displayAll()
{
  for (var i = 0; i < arguments.length; i++)
  {
    $(arguments[i]).next().slideDown();
  }
}

/**
 * Add tooltips and links to elements based on their class names.
 *
 * @param void
 * @return void
 */
function init()
{
  for (var i = 0; i < def_arr.length; i++)
  {
    var definition = document.getElementById(def_arr[i][0]);
    if(definition !== null)
    {
      definition.nextElementSibling.innerHTML = def_arr[i][1];
    }
    var instances = document.getElementsByClassName(def_arr[i][0]);
    while (instances.length > 0)
    {
      instances[0].title = def_arr[i][1];

      instances[0].href = (definition === null ? "glossary.php" : "") + "#" + def_arr[i][0];
      instances[0].className = "definition";
      instances = document.getElementsByClassName(def_arr[i][0]);
    } 
  }
  for (var i = 0; i < loc_arr.length; i++)
  {
    var display = "<address><span>"+
                  loc_arr[i][1].replace(/(\n)/g, "</span><span>") +
                  "</span></address>";

    $("#"+loc_arr[i][0]).next().html(display);

    var instances = document.getElementsByClassName(loc_arr[i][0]); 
    while (instances.length > 0)
    {
      instances[0].title = loc_arr[i][1];

      instances[0].href = "#" + loc_arr[i][0];
      instances[0].className = "definition";
      instances = document.getElementsByClassName(loc_arr[i][0]); 
    }
  }
  var instances = document.getElementsByClassName("locations");
  while (instances.length > 0)
  {
    instances[0].title = "See Locations";

    instances[0].href = "#locations";
    
    instances[0].onclick = function()
    {
      displayAll('#hous_mri', '#hous_omri', '#hous_rad', '#hous_xray', '#wood_mri');
    };

    instances[0].className = "definition";
    instances = document.getElementsByClassName("locations");
  } 
}

/**
 * Return to email input view upon acceptance of valid data in contact fields.
 *
 * @param void
 * @return void
 */
function restoreDisplay()
{
  document.getElementById('summary').style.display='none';
  document.getElementById('message').style.display='block';
  
}