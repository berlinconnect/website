<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: false
files: true
fields:
  title:
    label: Title
    type:  title
  text:
    label: Text
    type:  textarea
  date:
  	label: Date
  	type: date
  	format: MM/DD/YYYY
  location:
  	label: Location
  	type: text
  googlemapslink:
  	label: Google Maps Link
  	type: url
  	help: Google Maps Link of the location address
  link:
 	  label: Link
 	  type: url