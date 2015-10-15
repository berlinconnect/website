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
  addressheader:
    label: Address Header
    type: text
  venuelocation:
    label: Venue Location
    type: radio
    options:
      hausungarn: Haus Ungarn
      maritimhotel: Maritim Hotel
    help: Please select whether the venue will be at Haus Ungarn or Maritim Hotel
  churchaddress:
    label: Haus Ungarn Address
    type: textarea
    help: This is only the address for Haus Ungarn, not for Maritim Hotel or any other venue!
  entranceInfo:
    label: Info about the entrance
    type: textarea
    size: small
    help: Only shown, if the venue is at Haus Ungarn
  transporttitle:
  	label: Transport Title
  	type: text
