<?php


namespace App\Behavioral\Mediator\Ui;


use App\Behavioral\Mediator\Ui\Contracts\Mediator;

class UserRepositoryUiMediator implements Mediator
{
    private UserRepository $userRepository;
    private Ui $ui;

    public function __construct(UserRepository $userRepository, Ui $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user): string
    {
        return $this->ui->outputUserInfo($user);
    }

    public function getUser(string $userName): string
    {
        return $this->userRepository->getUserName($userName);
    }
}