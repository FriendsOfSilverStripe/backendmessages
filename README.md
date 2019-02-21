# [Generate SilverStripe backend messages](https://github.com/FriendsOfSilverStripe/backendmessages) with one simple call. Type less, do more.<br />[![Build Status](https://api.travis-ci.org/FriendsOfSilverStripe/backendmessages.svg?branch=master)](https://travis-ci.org/FriendsOfSilverStripe/backendmessages) [![Latest Stable Version](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/version.svg)](https://github.com/FriendsOfSilverStripe/backendmessages/releases) [![Latest Unstable Version](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/v/unstable.svg)](https://packagist.org/packages/FriendsOfSilverStripe/backendmessages) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/FriendsOfSilverStripe/backendmessages/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/FriendsOfSilverStripe/backendmessages/?branch=master) [![Total Downloads](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/downloads.svg)](https://packagist.org/packages/FriendsOfSilverStripe/backendmessages) [![License](https://poser.pugx.org/FriendsOfSilverStripe/backendmessages/license.svg)](https://github.com/FriendsOfSilverStripe/backendmessages/blob/master/license.md)


### Requirements

 * SilverStripe Framework ^3.0 or ^4.0


### Installation

```
composer require friendsofsilverstripe/backendmessages
```


### Usage

Within any FieldList you can call any of the following static methods to create a message box:

````
use FriendsOfSilverStripe\Backendmessages;

// [...]

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

## MISC: [Future ideas/development, issues](https://github.com/FriendsOfSilverStripe/backendmessages/issues), [Contributing](https://github.com/FriendsOfSilverStripe/backendmessages/blob/master/CONTRIBUTING.md), [License](https://github.com/FriendsOfSilverStripe/backendmessages/blob/master/license.md)

This project is supported by [bring your own ideas Ltd.](https://bringyourownideas.com). Bring Your Own Ideas Ltd. helps you to make your project ideas to reality.

[![bring your own ideas](https://bringyourownideas.com/images/byoi-light-bulb-transparent-background.png)](https://bringyourownideas.com)
