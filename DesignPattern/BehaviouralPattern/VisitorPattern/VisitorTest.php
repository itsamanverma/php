<?php
/**
 * @FileName   :VisitorTest.php
 * @purpose    : to testing the Visitor Pattern
 * @author     :AMAN VERMA
 * @version    :1.0
 * @since      :19/02/2019
 */
 require_once('Visitee.php');
 require_once('BookVisitee.php');
 require_once('SoftwareVisitee.php');
 require_once('PlainDescriptionVisitor.php');
 require_once('FancyDescriptionVisitor.php');

writeln('!.........BEGIN TESTING VISITOR PATTERN..........!');
writeln("\n");
/* create the instance of BookVisitor and initialized at runtime  */
$book = new BookVisitee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
/* create the instance of SoftwareVisitee and initialized at runtime */
$software = new SoftwareVisitee('Zend Studio', 'Zend Technologies', 'www.zend.com');

/*create the instance of PlainDescriptionVisitor */
$plainVisitor = new PlainDescriptionVisitor();
/*calling the function acceptVisitor */
acceptVisitor($book, $plainVisitor);
writeln('plain description of book: ' . $plainVisitor->getDescription()."\n");
/*calling the function aceeptVisitor */
acceptVisitor($software, $plainVisitor);
writeln('plain description of software: ' . $plainVisitor->getDescription()."\n");
writeln('');

/* create the instance of FancyDescriptionVisitor */
$fancyVisitor = new FancyDescriptionVisitor();

/* calling the acceptVisitor function */
acceptVisitor($book, $fancyVisitor);
writeln('fancy description of book: ' . $fancyVisitor->getDescription()."\n");
/*calling the acceptVisitor function */
acceptVisitor($software, $fancyVisitor);
writeln('fancy description of software: ' . $fancyVisitor->getDescription()."\n");
writeln("\n");
writeln('!.......END TESTING VISITOR PATTERN......!');

/**
 * double dispatch any visitor and visitee objects
 * @param $visitee_in
 * @param $visitor_in
 */
function acceptVisitor(Visitee $visitee_in, Visitor $visitor_in)
{
    $visitee_in->accept($visitor_in);
}
/**
 * create the function show in documation format
 * @param $line_in
 */
function writeln($line_in)
{
    echo $line_in . "<br/>";
}