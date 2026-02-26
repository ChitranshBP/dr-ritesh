
# Python script to move About section in index.html

try:
    with open('index.html', 'r', encoding='utf-8') as f:
        lines = f.readlines()
    
    # Target Block: About Section
    # Based on File View:
    # Line 304: <!-- About Section --> (Index 303)
    # Line 337: </section> (Index 336)
    
    start_idx = 303
    end_idx = 337 # Slice will be [303:337], so it includes 303..336
    
    # Allow some fuzzy matching in case lines shifted slightly, though they shouldn't have
    # Check start
    if "About Section" not in lines[start_idx]:
        print(f"Warning: Line {start_idx+1} does not look like About Section start. It is: {lines[start_idx]}")
        # Search for it?
        for i, line in enumerate(lines):
            if "<!-- About Section -->" in line:
                start_idx = i
                print(f"Found About Section start at {i+1}")
                break
    
    # Check end
    # We expect line 337 (index 336) to be </section>
    # And line 338 to be blank or start of next section
    # Let's find the closing </section> for this block.
    # We can just assume the provided line numbers are correct if the file hasn't changed.
    # But safe to verify.
    
    # Read block
    # Search for end idx from start_idx
    found_end = False
    for i in range(start_idx, len(lines)):
        if "</section>" in lines[i]:
            # This is the end of the About section
            end_idx = i + 1 # Include this line
            found_end = True
            break
            
    if not found_end:
        print("Could not find end of About section")
        exit(1)
        
    block = lines[start_idx:end_idx]
    print(f"Moving block of {len(block)} lines.")
    print(f"Start: {block[0].strip()}")
    print(f"End: {block[-1].strip()}")
    
    # Delete block
    del lines[start_idx:end_idx]
    
    # Insertion Point: After "Our Main Service"
    # Service ends at line 174 (index 173) with </section>
    # Specialties starts at line 176 (index 175) with <!-- Specialties ... -->
    # We want to insert at index 175?
    
    # Let's find "<!-- Specialties" to be safe
    insert_idx = -1
    for i, line in enumerate(lines):
        if "<!-- Specialties" in line or "specialties-section" in line:
            insert_idx = i
            # If it's the comment line, that's perfect.
            # If it's the section line, we plan to insert before the comment if it exists.
            # Just inserting before this line is probably safe.
            print(f"Found insertion point at {i+1}: {line.strip()}")
            break
            
    if insert_idx == -1:
        print("Could not find Specialties section for insertion reference")
        exit(1)
        
    # Insert before Specialties
    # Add a newline for spacing if needed
    lines[insert_idx:insert_idx] = block + ['\n', '\n']
    
    # Write back
    with open('index.html', 'w', encoding='utf-8') as f:
        f.writelines(lines)
        
    print("Move successful.")

except Exception as e:
    print(f"Error: {e}")
