<?php

namespace SDD\UtilsBundle\Doctrine\Functions;

use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;

/**
 * Class Rand
 * @package SDD\UtilsBundle\Doctrine\Functions
 *
 * http://cyberapp.ru/2014/08/27/symfony-2-doctrine-2-random-records-mysql-order-by-rand/
 *
 *   public function getRandomEntities($count = 10)
 * {
 * return  $this->createQueryBuilder('q')
 * ->addSelect('RAND() as HIDDEN rand')
 * ->addOrderBy('rand')
 * ->setMaxResults($count)
 * ->getQuery()
 * ->getResult();
 * }
 */
class Rand extends \Doctrine\ORM\Query\AST\Functions\FunctionNode
{

    public function parse(\Doctrine\ORM\Query\Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker)
    {
        return 'RAND()';
    }

}