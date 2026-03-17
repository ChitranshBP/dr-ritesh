import shutil
import os

# Source maps (generated paths from previous tool outputs)
neurology_map = {
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/stroke_brain_mapping_1773751494170.png": "d:/download/ritesh/assets/neurology-tms/stroke.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/motor_recovery_progress_1773751511420.png": "d:/download/ritesh/assets/neurology-tms/motor-recovery.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/aphasia_speech_centers_1773751530978.png": "d:/download/ritesh/assets/neurology-tms/aphasia.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/parkinsons_neural_circuitry_1773751549923.png": "d:/download/ritesh/assets/neurology-tms/parkinsons-motor.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/parkinsons_steadiness_recovery_1773751569826.png": "d:/download/ritesh/assets/neurology-tms/parkinsons-tremor.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/parkinsons_cognitive_clarity_1773751587586.png": "d:/download/ritesh/assets/neurology-tms/parkinsons-cognitive.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/fibromyalgia_pain_mapping_1773751619831.png": "d:/download/ritesh/assets/neurology-tms/fibromyalgia-pain.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/neuropathic_nerve_relief_1773751635508.png": "d:/download/ritesh/assets/neurology-tms/neuropathic-pain-nerve.png",
}

psychiatry_dir = "d:/download/ritesh/assets/psychiatry-tms"
if not os.path.exists(psychiatry_dir):
    os.makedirs(psychiatry_dir)

psychiatry_map = {
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/depression_brain_activity_1773751653074.png": "d:/download/ritesh/assets/psychiatry-tms/mdd-brain.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/depression_emotional_relief_1773751673165.png": "d:/download/ritesh/assets/psychiatry-tms/mdd-relief.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/anxiety_calm_signals_1773751690762.png": "d:/download/ritesh/assets/psychiatry-tms/anxiety-signals.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/anxiety_peaceful_focus_1773751714495.png": "d:/download/ritesh/assets/psychiatry-tms/anxiety-focus.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/ptsd_neural_circuitry_1773751740901.png": "d:/download/ritesh/assets/psychiatry-tms/ptsd-brain.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/ptsd_peaceful_recovery_1773751762403.png": "d:/download/ritesh/assets/psychiatry-tms/ptsd-recovery.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/ocd_brain_circuitry_1773751781386.png": "d:/download/ritesh/assets/psychiatry-tms/ocd-brain.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/ocd_freedom_breakthrough_1773751800859.png": "d:/download/ritesh/assets/psychiatry-tms/ocd-recovery.png",
    "C:/Users/GCV/.gemini/antigravity/brain/8765e48d-4e98-4dbb-a809-0fce8d647747/adhd_neural_focus_1773751820743.png": "d:/download/ritesh/assets/psychiatry-tms/adhd-brain.png",
}

for src, dst in neurology_map.items():
    if os.path.exists(src):
        shutil.copy(src, dst)
        print(f"Copied {src} to {dst}")
    else:
        print(f"Source not found: {src}")

for src, dst in psychiatry_map.items():
    if os.path.exists(src):
        shutil.copy(src, dst)
        print(f"Copied {src} to {dst}")
    else:
        print(f"Source not found: {src}")
