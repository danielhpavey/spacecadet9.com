/*
Title: Joomla From Validation
Date: 20130225
Tags: joomla,web design

*/

# Joomla! Form Validation

Do you need to add some JavaScript form validation to your [Joomla!](http://www.spacecadet9.com/category/joomla/) module or component?

Of course you do!

Add this to your [php](http://www.spacecadet9.com/category/php/)  page:

`
JHTML::_('behavior.mootools');
JHTML::_('behavior.formvalidation');
`

Then add this to the form:

`
class="form-validate" onSubmit="return myValidate(this);"
`

Then add these classes to the form inputs: 

`
class="required"
`

or

`
class="required validate-email"
`

Bob’s you're auntie..!
