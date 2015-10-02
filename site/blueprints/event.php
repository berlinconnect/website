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
  tag:
    label: Tag
    type: select
    options:
      general: General
      kids: Kids
      youth: Youth
      sisterhood: Sisterhood
      dinner-parties: Dinner Party
      conferences: Conferences
      social-kindness: Social Kindness
      enlarge: Enlarge
  ticketprice:
    lable: Ticket Price
    type: text
  ticketlink:
    lable: Ticket Link
    type: text
