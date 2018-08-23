import unittest

class ArrayTests(unittest.TestCase):
    def test_can_access(self):
        data = [1, 2, 3]
        self.assertEqual(data[0], 1)

if __name__ == "__main__":
    unittest.main()

