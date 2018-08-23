import unittest

class ArrayTests(unittest.TestCase):
    def test_can_access(self):
        data = [1, 2, 3]
        self.assertEqual(data[0], 1)

    def test_subselect(self):
        data = [1, 2, 3, 4]
        self.assertEqual(data[1:3], [2, 3])

    def test_multiply(self):
        data = [1, 2, 3, 4]
        self.assertEqual([d * 2 for d in data], [2, 4, 6, 8])
        self.assertEqual([d * 2 for d in data if d % 2 == 0], [4, 8])

    def test_head_tail(self):
        data = [1, 2, 3, 4]
        head = data[0]
        tail = data[1:]
        self.assertEqual(head, 1)
        self.assertEqual(tail, [2, 3, 4])

    def test_join_array(self):
        data1 = [1, 2, 3, 4]
        data2 = ['a', 'b', 'c', 'd']
        data3 = ['a', 'b', 'c']

        self.assertEqual([[a, b] for a, b in zip(data1, data2)], [[1, 'a'], [2, 'b'], [3, 'c'], [4, 'd']])
        self.assertEqual([[a, b] for a, b in zip(data1, data3)], [[1, 'a'], [2, 'b'], [3, 'c']])


class StringTests(unittest.TestCase):
    def test_formatting(self):
        template = "something {}. something {}"
        self.assertEqual(template.format(1, 2), "something 1. something 2")


if __name__ == "__main__":
    unittest.main()
