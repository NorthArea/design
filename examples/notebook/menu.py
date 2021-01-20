from notebook import Note, Notebook
import sys


class Menu:
    def __init__(self):
        self.notebook = Notebook()
        self.choices = {
            "1": self.show_notes,
            "2": self.search_notes,
            "3": self.add_note,
            "4": self.modify_note,
            "5": self.quite
        }

    @staticmethod
    def display_menu():
        print("""
            Notebook Menu:
            1. Show all Notes
            2. Search Notes
            3. Add Note
            4. Modify
            5. Quit
        """)

    def run(self):
        """Display the menu"""
        while True:
            self.display_menu()
            choice = input("Enter a value: ")
            action = self.choices.get(choice)
            if action:
                action()
            else:
                print("{0} is not a valid choice".format(choice))

    def show_notes(self, notes=None):
        if notes is None:
            if self.notebook.notes:
                notes = self.notebook.notes
            else:
                print("Note is not exist")
                return False

        for note in notes:
            print(f"{note.id}: {note.memo} \n{note.tags}\n")

    def search_notes(self):
        filter = input("Search for: ")
        notes = self.notebook.search(filter)
        self.show_notes(notes)

    def add_note(self):
        memo = input("Enter a memo: ")
        self.notebook.new_note(memo)
        print("Your note has been added.")

    def modify_note(self):
        id = input("Enter a note id: ")
        memo = input("Enter a memo: ")
        tags = input("Enter tags: ")
        if memo:
            self.notebook.modify_memo(id, memo)
        if tags:
            self.notebook.modify_tags(id, tags)

    def quite(self):
        print("Thank you for using your notebook.")
        sys.exit(0)


if __name__ == '__main__':
    Menu().run()
