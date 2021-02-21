from abc import ABC, abstractmethod


class AbstractClass(ABC):
    def test(self):
        return 1 + 1

    @abstractmethod
    def do_something(self, str):
        pass


class A(AbstractClass):
    def do_something(self, str):
        return "A do: " + str


class B(AbstractClass):
    def do_something(self, str):
        return "B do: " + str


class C:
    def __init__(self):
        self._obj = A()

    def change_to_a(self):
        self._obj = A()

    def change_to_b(self):
        self._obj = B()

    def do(self, str='Greeting'):
        print(self._obj.do_something(str))


obj = C()
obj.do()
obj.change_to_b()
obj.do()
obj.change_to_a()
obj.do()
