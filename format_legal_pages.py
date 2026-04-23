import re

def fix_formatting(filepath):
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # Find the content block
    start_marker = '<div class="container" style="max-width: 900px; margin: 0 auto;">'
    end_marker = '</div>\n    </section>'
    
    start_idx = content.find(start_marker) + len(start_marker)
    end_idx = content.find(end_marker)
    
    if start_idx == -1 or end_idx == -1:
        return
        
    body = content[start_idx:end_idx]
    
    # Remove existing <p>, </p>, <ul>, <li>, etc to start fresh
    body = body.replace('<p>', '').replace('</p>', '')
    body = body.replace('<ul>', '').replace('</ul>', '')
    body = body.replace('<li>', '').replace('</li>', '')
    body = body.replace('<pre><code>', '').replace('</code></pre>', '')
    
    # Split by lines
    lines = body.split('\n')
    
    formatted_lines = []
    in_list = False
    
    for line in lines:
        line = line.strip()
        if not line:
            continue
            
        # If it's a list item
        if line.startswith('•') or line.startswith('-'):
            if not in_list:
                formatted_lines.append('<ul>')
                in_list = True
            formatted_lines.append(f'<li>{line[1:].strip()}</li>')
        else:
            if in_list:
                formatted_lines.append('</ul>')
                in_list = False
                
            # If it's a header (short, no punctuation at end, capitalized words)
            if len(line) < 50 and not line.endswith('.') and not line.endswith(';') and not line.endswith(':'):
                # Probably a header
                formatted_lines.append(f'<h3 style="margin-top: 2rem; margin-bottom: 1rem;">{line}</h3>')
            else:
                formatted_lines.append(f'<p style="margin-bottom: 1.5rem; line-height: 1.8;">{line}</p>')
                
    if in_list:
        formatted_lines.append('</ul>')
        
    new_body = '\n'.join(formatted_lines)
    
    # Reassemble
    new_content = content[:start_idx] + '\n' + new_body + '\n        ' + content[end_idx:]
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(new_content)

# Apply to all 3 files
fix_formatting(r"d:\Documents\Hotel X Toronto\10XTO Website\10xto-wordpress-theme\page-privacy-policy.php")
fix_formatting(r"d:\Documents\Hotel X Toronto\10XTO Website\10xto-wordpress-theme\page-terms-conditions.php")
fix_formatting(r"d:\Documents\Hotel X Toronto\10XTO Website\10xto-wordpress-theme\page-accessibility.php")

print("Formatting fixed!")
