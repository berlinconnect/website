<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: true
files: true
fields:
  title:
    label: Title
    type:  title
  date:
    label: Date
    type:  date
    format: DD/MM/YYYY
  author:
  	label: Author
  	type: text
  size:
    label: Size
    type: radio
    default: squaresmall
    options:
      squarebig: Square Big
      squaresmall: Square Small
      rectangle: Rectangle 
    help: Please choose one of these sizes
  tags:
    label: Tags
    type: tags
  category:
    label: Category
    type: tags
  color:
    label: Color
    type: radio
    options:
      orange: Orange
      green: Green
      blue: Blue
  scriptures: 
    label: Scriptures
    type: text
  readings:
    label: Readings
    type: textarea
  text:
    label: Text
    type: textarea