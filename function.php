<?php


function filterRequest($Request){

  return  htmlspecialchars(strip_tags($_POST[$Request]));
}