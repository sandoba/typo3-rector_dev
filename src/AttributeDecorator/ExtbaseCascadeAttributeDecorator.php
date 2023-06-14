<?php

declare(strict_types=1);

namespace Ssch\TYPO3Rector\AttributeDecorator;

use PhpParser\Node\Attribute;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Scalar\String_;
use Rector\Php80\Contract\AttributeDecoratorInterface;

final class ExtbaseCascadeAttributeDecorator implements AttributeDecoratorInterface
{
    public function getAttributeName(): string
    {
        return 'TYPO3\\CMS\\Extbase\\Annotation\\ORM\\Cascade';
    }

    public function decorate(Attribute $attribute): void
    {
        $firstArg = $attribute->args[0];
        $firstArg->value = new Array_([new ArrayItem(new String_('remove'), new String_('value'))]);
    }
}