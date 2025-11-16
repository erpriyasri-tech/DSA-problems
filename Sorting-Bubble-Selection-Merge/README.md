Comparison of Sorting Algorithms (by Swaps)

Sorting Algorithm	Swaps (approx.)	Time Complexity	Notes
Bubble Sort	❌ Very high (many swaps)	O(n²)	Each pass swaps every out-of-order pair.
Selection Sort	✅ Minimum swaps	O(n²)	Finds smallest element & swaps only once per pass.
Insertion Sort	⚖️ Moderate	O(n²)	Shifts elements instead of many swaps.
Quick Sort	⚡ Efficient (few swaps)	O(n log n)	Swaps depend on pivot position.
Merge Sort	⚡ Few (almost none)	O(n log n)	Uses temporary arrays, not in-place swaps.
Heap Sort	⚡ Moderate	O(n log n)	Swaps during heapify steps.