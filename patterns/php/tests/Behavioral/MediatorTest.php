<?php


namespace Test\Behavioral;


use App\Behavioral\Mediator\Conceptual\ComponentOne;
use App\Behavioral\Mediator\Conceptual\ComponentTwo;
use App\Behavioral\Mediator\Conceptual\ConcreteMediator;
use App\Behavioral\Mediator\DispatcherPsr\Event\SomeEvent;
use App\Behavioral\Mediator\DispatcherPsr\EventDispatcher;
use App\Behavioral\Mediator\DispatcherPsr\Listener\SomeListener;
use App\Behavioral\Mediator\DispatcherPsr\ListenerProvider;
use App\Behavioral\Mediator\Ui\Ui;
use App\Behavioral\Mediator\Ui\UserRepository;
use App\Behavioral\Mediator\Ui\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testUi(): void
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());

        self::assertEquals('User: Dominik', $mediator->printInfoAbout('Dominik'));
    }

    public function testConceptual(): void
    {
        $componentOne = new ComponentOne();
        $componentTwo = new ComponentTwo();

        self::assertEquals(0, $componentOne->test);

        ConcreteMediator::getInstance()->addComponent($componentOne)->addComponent($componentTwo);

        $componentOne->doA();
        self::assertEquals(1, $componentOne->test);
    }

    public function testDispatcher(): void
    {
        $text = "Hello world";
        $listener = new SomeListener();

        $provider = new ListenerProvider();
        $provider->addListener(SomeEvent::class, $listener)
            ->addListener(SomeEvent::class, static function (SomeEvent $event) {

            });

        $eventDispatcher = new EventDispatcher($provider);
        $eventDispatcher->dispatch(new SomeEvent($text));

        self::assertEquals($text, $listener->text);
    }


}