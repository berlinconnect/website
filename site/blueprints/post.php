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
    default: small
    options:
      featured: Featured
      small: Small
      normal: Normal 
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
    help: Orange = Discovery, Green = Life Skills, Blue = My Bible
  link:
    label: Link
    type: url
  scriptures: 
    label: Scriptures
    type: textarea
  readings:
    label: Readings
    type: textarea
  text:
    label: Text
    type: textarea