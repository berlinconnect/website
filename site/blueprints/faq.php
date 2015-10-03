<?php if(!defined('KIRBY')) exit ?>

title: FAQ
pages: true
files: true
fields:
  title:
    label: Title
    type:  title
  herotitle:
    label: Hero Title
    type:  text
  herotext:
  	label: Hero Text
  	type: textarea
  emailbutton:
    label: Text for Email Button
    type: text
  emailaddress: 
    label: Email Address for Questions
    type: email
    help: Just the email address please, "mailto:" is already added
  leftcolumn:
  	label: Left Column
  	type: textarea