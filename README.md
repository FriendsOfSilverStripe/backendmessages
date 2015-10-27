# Backend messages

## Introduction

Type less, do more. This module contains a number of classes make the generation of message boxes as FormFields in the SilverStripe backend easier.

## Usage

````
<?php

	Message::error('Ehh, something went wrong.')
	Message::warning('Be careful with this!')
	Message::success('Yeah, that went through just fine.')
	Message::notice('This is a useful hint.')
	Message::generic('Some more information.')

````

generates

<img src="https://raw.githubusercontent.com/friendsofsilverstripe/backendmessages/master/images/screenshots/messages.png">


## Requirements

 * SilverStripe Framework 3.x.x
