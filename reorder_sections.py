
# Python script to move sections in index.html

try:
    with open('index.html', 'r', encoding='utf-8') as f:
        lines = f.readlines()
        
    # Lines 268-405 (original indices 267 to 404 inclusive, so [267:405] because end is exclusive)
    # Validate content first
    start_idx = 267
    end_idx = 405
    
    # Check bounds
    if len(lines) < end_idx:
        print(f"Error: File length {len(lines)} is less than expected {end_idx}")
        exit(1)
        
    block = lines[start_idx:end_idx]
    
    # Verify content
    start_content = block[0].strip()
    end_content = block[-1].strip()
    
    expected_start = "<!-- Our Main Service Section -->"
    expected_end = "</section>"
    
    if start_content != expected_start:
        print(f"Error: Expected start line '{expected_start}', got '{start_content}'")
        exit(1)
        
    if end_content != expected_end:
        print(f"Error: Expected end line '{expected_end}', got '{end_content}'")
        exit(1)
        
    print("Content verified. Proceeding with move.")
        
    # Delete block
    del lines[start_idx:end_idx]
    
    # Insert at line 94 (index 93, after </header>) (Actually, 93 is line 94)
    # Line 93 is </header> (index 92)
    # Line 94 is blank (index 93)
    # Line 95 is <!-- Trust ... --> (index 94)
    # We want to insert *between* index 92 and 94.
    # So index 93 is correct.
    
    # Before the insertion, line 93 (index 93) is blank.
    # We want to preserve the blank.
    # We want to insert AFTER the line 93 (so effectively index 94?).
    # Or insert at index 93?
    
    # Let's insert AT index 93.
    # This pushes the existing index 93 (blank) and index 94 (Trust) down.
    # So the block will be before the blank line.
    # Maybe add a newline after the block?
    
    insert_idx = 93
    lines[insert_idx:insert_idx] = block
    
    # Add a newline after the block to separate it from the previous footer
    lines.insert(insert_idx + len(block), '\n')

    # Add a newline before the block to separate it from the previous <header>
    lines.insert(insert_idx, '\n')
    
    # Write back
    with open('index.html', 'w', encoding='utf-8') as f:
        f.writelines(lines)
        
    print("Reorder successful.")
    
except Exception as e:
    print(f"Error: {e}")
