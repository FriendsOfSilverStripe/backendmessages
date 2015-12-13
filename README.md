# Backend messages

[![Build Status](https://api.travis-ci.org/FriendsOfSilverStripe/backendmessages.svg?branch=master)](https://travis-ci.org/FriendsOfSilverStripe/backendmessages)
[![Latest Stable Version](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/version.svg)](https://github.com/FriendsOfSilverStripe/backendmessages/releases)
[![Latest Unstable Version](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/v/unstable.svg)](https://packagist.org/packages/FriendsOfSilverStripe/backendmessages)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/FriendsOfSilverStripe/backendmessages.svg)](https://scrutinizer-ci.com/g/FriendsOfSilverStripe/backendmessages?branch=master)
[![Total Downloads](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/downloads.svg)](https://packagist.org/packages/FriendsOfSilverStripe/backendmessages)
[![License](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/license.svg)](https://github.com/FriendsOfSilverStripe/backendmessages/blob/master/license.md)

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
