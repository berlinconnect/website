<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: true
fields:
  state:
    label: State
    type: radio
    options:
      on: Show
      off: Hide
    help: Select whether to show or hide the blue notice
  title:
    label: Title
    type:  text
  noticetext:
    label: Text
    type:  textarea
  link:
    label: Link
    type:  text
  learnmore:
    label: Learn More Button
    type:  text
  dismiss:
    label: Dismiss Button
    type:  text
  read:
    label: Read Label
    type:  text
