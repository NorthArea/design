<?php


namespace Test\Structural;


use App\Structural\Composite\Cart\Cart;
use App\Structural\Composite\FormComposite\Form;
use App\Structural\Composite\FormComposite\Input;
use App\Structural\Composite\Cart\Box;
use App\Structural\Composite\Cart\Product;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testForm(): void
    {
        $form = (new Form())->addElement(new Input("Email"))->addElement(new Input("Password"))->render();

        self::assertEquals(
            "<form><input type='text' placeholder='Email'><input type='text' placeholder='Password'></form>",
            $form
        );
    }

    public function testCart(): void
    {
        $box = new Box(2);
        $box->add(new Product(2));

        $bigBox = new Box(3);
        $bigBox->add($box);
        $bigBox->add(new Product(5));
        $bigBox->add(new Product(2));


        Cart::getInstance()->add($bigBox)->add(new Product(11));

        self::assertEquals(25, Cart::getSum());
    }


}