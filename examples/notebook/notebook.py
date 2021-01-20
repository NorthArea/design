import datetime

last_id = 0


class Note:
    """Represent a note in notebook"""
    def __init__(self, memo: str, tags=''):
        """Initialize a note"""
        global last_id
        last_id = +1
        self.id = last_id

        self.memo = memo
        self.tags = tags
        self.creation_date = datetime.date.today()

    def match(self, filter: str) -> bool:
        return filter in self.memo or filter in self.tags


class Notebook:
    """Represent a notebook"""
    notes = None

    def __init__(self):
        self.notes = []

    def new_note(self, memo, tags='') -> None:
        self.notes.append(Note(memo, tags))

    def modify(self, note_id: int, tags: str) -> None:
        for note in self.notes:
            if note.id == note_id:
                note.tags = tags
                break

    def _find_note(self, note_id: int):
        for note in self.notes:
            if note.id == note_id:
                return note
        return None

    def modify_memo(self, note_id, memo):
        self._find_note(note_id).memo = memo

    def search(self, filter):
        """Find all notes that match the given filter
        string."""
        return [note for note in self.notes if
                note.match(filter)]

    def modify_tags(self, id, tags):
        """Find the note with the given id and change its
         tags to the given value."""
        for note in self.notes:
            if note.id == id:
                note.tags = tags
                break
