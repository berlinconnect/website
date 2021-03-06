<?php if(!defined('KIRBY')) exit ?>

title: Welcome Home
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
  	size: small
  videoheader:
    label: Video Header
    type: radio
    options:
      videoYES: Video Header Background
      videoNO: Image Header Background
    help: Please select whether there should be a video header
  abouttitle:
  	label: About Title
  	type: text
  aboutheader:
  	label: About Header
  	type: text
  abouttext:
  	label: About Text
  	type: textarea
  	size: small
  subscribetitle:
  	label: Subscribe Title
  	type: text
  subscribeheader:
  	label: Subscribe Header
  	type: text
  subscribetext:
  	label: Subscribe Text
  	type: textarea
  	size: small
  subscribeinputplaceholder:
  	label: Subscribe Input Placeholder
  	type: text
  specialtitle:
  	label: Special Title
  	type: text
  specialheader:
  	label: Special Header
  	type: text
  specialtext:
  	label: Special Text
  	type: textarea
  	size: small
  specialbutton:
  	label: Special Button Text
  	type: text
  speciallink:
  	label: Special Link
  	type: text
  overview:
  	label: Overview
  	type: textarea
  	size: small
  sundaytitle:
  	label: Sunday Title
  	type: text
  sundaytext:
  	label: Sunday Text
  	type: textarea
  	size: small
  readmore:
  	label: Read More
  	type: text
  communitytitle:
  	label: Community Title
  	type: text
  communitytext:
  	label: Community Text
  	type: textarea
  	size: small
  socialtitle:
  	label: Social Title
  	type: text
  socialtext:
  	label: Social Text
  	type: textarea
  	size: small
  oursundaygatherings:
    label: Our Sunday Gatherings Title
    type: text
  oursundaygatheringstext:
    label: Our Sunday Gatherings Text
    type: textarea
    size: small
  servicetimes:
    label: Service Time Title
    type: text
  servicetimespots:
    label: Service Times
    type: checkboxes
    options:
      11: 11:00
      13: 13:00
      15: 15:00
      17: 17:00
      19: 19:00
    help: Please select the service times
  westberlintitle:
    label: West Berlin Title
    type: text
  westberlinsoon:
    label: Coming Soon Text
    type: text
  westberlincopy:
    label: West Berlin Text
    type: text
  westberlinlink:
    label: West Berlin Link
    type: text
  westberlinbutton:
    label: Find out more
    type: text
  specialevent:
    label: Special Event
    type: radio
    options:
      on: Show
      off: Hidden
    help: Please choose option to either hide or show a special event section. Make sure you fill in all the content before saving.
  specialeventspecial:
    label: Special Tag
    type: text
  specialeventtitle:
    label: Special Event Title
    type: text
  specialeventtext:
    label: Special Event Text
    type: textarea
  specialeventlocation:
    label: Special Event Location
    type: text
  specialeventlocationlink:
    label: Special Event Link
    type: text
  specialeventdate:
  	label: Special Event Date
  	type: date
  	format: MM/DD/YYYY
  eventsectiontitle:
  	label: Event Section Title
  	type: text
  eventsectionheader:
    label: Event Section Header
    type: text
  eventsectioninfo:
  	label: Event Section Info
  	type: textarea
  	size: small
  seefullcalendar:
    label: See Full Calendar
    type: text
  prayertitle:
    label: Prayer Form Title
    type: text
  praisetitle:
    label: Praise Form Title
    type: text
  prayerurl:
    label: Prayer Form Link
    type: text
  praiseurl:
    label: Praise Form Link
    type: text
  addressheader:
    label: Address Header
    type: text
  venuelocation:
    label: Venue Location
    type: radio
    options:
      kulturbrauerei: Kulturbrauerei
      maritimhotel: Maritim Hotel
    help: Please select whether the venue will be at Kulturbrauerei or Maritim Hotel
  churchaddress:
    label: Kulturbrauerei Address
    type: textarea
    help: This is only the address for Kulturbrauerei, not for Maritim Hotel or any other venue!
  entranceInfo:
    label: Info about the entrance
    type: textarea
    size: small
    help: Only shown, if the venue is at Haus Ungarn
  transporttitle:
  	label: Transport Title
  	type: text
