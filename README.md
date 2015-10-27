# Backend messages

## Introduction

Type less, do more. This module contains a number of classes to make the generation of message boxes as FormFields in the SilverStripe backend easier.

## Usage

Within any FieldList you can call any of the following static methods to create a message box:

````
FieldList::create(
	ErrorMessage::create('Ehh, something went wrong.'),
	WarningMessage::create('Be careful with this!'),
	SuccessMessage::create('Yeah, that went through just fine.'),
	NoticeMessage::create('This is a useful hint.'),
	Message::generic('Some more information.')
);

````
generates

<img src="https://raw.githubusercontent.com/friendsofsilverstripe/backendmessages/master/images/screenshots/messages.png">


## Requirements

 * SilverStripe Framework 3.x.x
