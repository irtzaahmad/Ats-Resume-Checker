<?php
/**
 * Template Name: Resume Builder
 * Description: AI-Powered Step-by-Step Resume Builder (Zero-Dependency Version)
 *
 * @package ATS_Resume_Checker
 */

get_header();
?>

<section class="page-header" style="padding: 4rem 0 2rem;">
    <div class="container" style="text-align: center;">
        <h1 class="page-title"><?php esc_html_e( 'AI Resume Builder', 'ats-resume-checker' ); ?></h1>
        <p class="page-description"><?php esc_html_e( 'Create a professional, ATS-optimized resume in minutes with AI assistance.', 'ats-resume-checker' ); ?></p>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container" style="max-width: 800px;">
        <div class="wizard-container" id="ats-wizard-container">
            <div class="steps-indicator">
                <div class="step active" data-step="1">1. Contact</div>
                <div class="step" data-step="2">2. Experience</div>
                <div class="step" data-step="3">3. Education</div>
                <div class="step" data-step="4">4. Skills</div>
                <div class="step" data-step="5">5. Summary</div>
            </div>

            <form id="resume-form" onsubmit="return false;">
                <!-- Step 1: Contact Info -->
                <div class="step-content active" id="step-1">
                    <h2 class="step-heading"><?php esc_html_e( 'Contact Information', 'ats-resume-checker' ); ?></h2>
                    <div class="form-group">
                        <label for="full_name"><?php esc_html_e( 'Full Name', 'ats-resume-checker' ); ?></label>
                        <input type="text" id="full_name" name="full_name" placeholder="John Doe" class="input-field" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><?php esc_html_e( 'Email', 'ats-resume-checker' ); ?></label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" class="input-field" required>
                    </div>
                    <div class="form-group">
                        <label for="phone"><?php esc_html_e( 'Phone', 'ats-resume-checker' ); ?></label>
                        <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000" class="input-field">
                    </div>
                    <div class="form-group">
                        <label for="location"><?php esc_html_e( 'Location', 'ats-resume-checker' ); ?></label>
                        <input type="text" id="location" name="location" placeholder="New York, NY" class="input-field">
                    </div>
                </div>

                <!-- Step 2: Experience -->
                <div class="step-content" id="step-2" style="display:none;">
                    <h2 class="step-heading"><?php esc_html_e( 'Work Experience', 'ats-resume-checker' ); ?></h2>
                    <div id="experience-list">
                        <div class="experience-item card">
                            <div class="form-group">
                                <label><?php esc_html_e( 'Job Title', 'ats-resume-checker' ); ?></label>
                                <input type="text" name="job_title[]" placeholder="Software Engineer" class="input-field job-title-input">
                            </div>
                            <div class="form-group">
                                <label><?php esc_html_e( 'Company', 'ats-resume-checker' ); ?></label>
                                <input type="text" name="company[]" placeholder="Google" class="input-field">
                            </div>
                            <div class="form-group">
                                <label><?php esc_html_e( 'Description', 'ats-resume-checker' ); ?></label>
                                <textarea name="job_desc[]" rows="4" placeholder="Describe your responsibilities..." class="textarea-field"></textarea>
                                <button type="button" class="ai-btn generate-bullets">✨ <?php esc_html_e( 'Generate with AI', 'ats-resume-checker' ); ?></button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline" id="add-experience" style="margin-top: 1rem;">+ <?php esc_html_e( 'Add More Experience', 'ats-resume-checker' ); ?></button>
                </div>

                <!-- Step 3: Education -->
                <div class="step-content" id="step-3" style="display:none;">
                    <h2 class="step-heading"><?php esc_html_e( 'Education', 'ats-resume-checker' ); ?></h2>
                    <div id="education-list">
                        <div class="education-item card">
                            <div class="form-group">
                                <label><?php esc_html_e( 'Degree', 'ats-resume-checker' ); ?></label>
                                <input type="text" name="degree[]" placeholder="B.S. Computer Science" class="input-field">
                            </div>
                            <div class="form-group">
                                <label><?php esc_html_e( 'School', 'ats-resume-checker' ); ?></label>
                                <input type="text" name="school[]" placeholder="Stanford University" class="input-field">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline" id="add-education" style="margin-top: 1rem;">+ <?php esc_html_e( 'Add More Education', 'ats-resume-checker' ); ?></button>
                </div>

                <!-- Step 4: Skills -->
                <div class="step-content" id="step-4" style="display:none;">
                    <h2 class="step-heading"><?php esc_html_e( 'Skills', 'ats-resume-checker' ); ?></h2>
                    <div class="form-group">
                        <label><?php esc_html_e( 'Enter your skills (comma separated)', 'ats-resume-checker' ); ?></label>
                        <input type="text" id="skills-input" name="skills" placeholder="JavaScript, PHP, React, Project Management" class="input-field">
                        <button type="button" class="ai-btn" id="suggest-skills" style="margin-top: 10px;">✨ <?php esc_html_e( 'Suggest Skills with AI', 'ats-resume-checker' ); ?></button>
                    </div>
                </div>

                <!-- Step 5: Summary -->
                <div class="step-content" id="step-5" style="display:none;">
                    <h2 class="step-heading"><?php esc_html_e( 'Professional Summary', 'ats-resume-checker' ); ?></h2>
                    <div class="form-group">
                        <textarea id="summary" name="summary" rows="6" placeholder="Write a brief professional summary..." class="textarea-field"></textarea>
                        <button type="button" class="ai-btn" id="generate-summary" style="margin-top: 10px;">✨ <?php esc_html_e( 'Generate Summary with AI', 'ats-resume-checker' ); ?></button>
                    </div>
                </div>

                <div class="form-navigation" style="display: flex; justify-content: space-between; margin-top: 2rem; border-top: 1px solid #ddd; padding-top: 1.5rem;">
                    <button type="button" id="prev-btn" class="btn btn-outline" style="min-width: 120px;"><?php esc_html_e( 'Previous', 'ats-resume-checker' ); ?></button>
                    <div>
                        <button type="button" id="next-btn" class="btn btn-primary" style="min-width: 120px;"><?php esc_html_e( 'Next', 'ats-resume-checker' ); ?></button>
                        <button type="submit" id="submit-btn" class="btn btn-primary hidden" style="min-width: 120px;"><?php esc_html_e( 'Download Resume', 'ats-resume-checker' ); ?></button>
                    </div>
                </div>
            </form>
        </div>

        <div id="preview-section" class="hidden">
            <div class="preview-actions" style="margin-bottom: 20px; display: flex; gap: 10px; justify-content: center;">
                <button type="button" class="btn btn-primary" id="print-btn"><?php esc_html_e( 'Download PDF', 'ats-resume-checker' ); ?></button>
                <button type="button" class="btn btn-outline" id="edit-btn"><?php esc_html_e( 'Back to Edit', 'ats-resume-checker' ); ?></button>
            </div>
            <div id="resume-preview" class="resume-paper" style="background: white; padding: 40px; color: black; min-height: 297mm; border: 1px solid #ddd;"></div>
        </div>
    </div>
</section>

<style>
.wizard-container { background: var(--color-bg-card); padding: 2rem; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); border: 1px solid var(--color-border); }
.steps-indicator { display: flex; justify-content: space-between; margin-bottom: 2rem; border-bottom: 2px solid #eee; padding-bottom: 1rem; }
.step { font-weight: 600; font-size: 0.85rem; color: #888; position: relative; }
.step.active { color: var(--color-accent); }
.step.active::after { content: ''; position: absolute; bottom: -1.1rem; left: 0; width: 100%; height: 3px; background: var(--color-accent); }
.step-content { animation: fadeIn 0.3s ease-in; }
@keyframes fadeIn { from { opacity: 0; transform: translateY(5px); } to { opacity: 1; transform: translateY(0); } }
.card { border: 1px solid #eee; padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem; background: #fafafa; }
.ai-btn { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white !important; border: none; padding: 8px 16px; border-radius: 20px; cursor: pointer; font-size: 0.8rem; font-weight: 600; margin-top: 10px; }
.hidden { display: none !important; }
@media print { body * { visibility: hidden; } #resume-preview, #resume-preview * { visibility: visible; } #resume-preview { position: absolute; left: 0; top: 0; width: 100%; } }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let currentStep = 1;
    const steps = document.querySelectorAll('.step-content');
    const indicators = document.querySelectorAll('.step');
    const nextBtn = document.getElementById('next-btn');
    const prevBtn = document.getElementById('prev-btn');
    const submitBtn = document.getElementById('submit-btn');
    const wizard = document.getElementById('ats-wizard-container');
    const preview = document.getElementById('preview-section');
    const form = document.getElementById('resume-form');

    function updateUI() {
        steps.forEach((s, i) => {
            s.style.display = (i + 1 === currentStep) ? 'block' : 'none';
        });
        indicators.forEach((s, i) => {
            s.classList.toggle('active', i + 1 === currentStep);
        });
        
        prevBtn.style.visibility = (currentStep === 1) ? 'hidden' : 'visible';
        
        if (currentStep === steps.length) {
            nextBtn.classList.add('hidden');
            submitBtn.classList.remove('hidden');
        } else {
            nextBtn.classList.remove('hidden');
            submitBtn.classList.add('hidden');
        }
        window.scrollTo({ top: wizard.offsetTop - 50, behavior: 'smooth' });
    }

    nextBtn.addEventListener('click', function() {
        if (currentStep < steps.length) {
            currentStep++;
            updateUI();
        }
    });

    prevBtn.addEventListener('click', function() {
        if (currentStep > 1) {
            currentStep--;
            updateUI();
        }
    });

    // Dynamic lists
    document.getElementById('add-experience').onclick = function() {
        const div = document.createElement('div');
        div.className = 'experience-item card';
        div.innerHTML = `
            <div class="form-group"><label>Job Title</label><input type="text" name="job_title[]" class="input-field job-title-input"></div>
            <div class="form-group"><label>Company</label><input type="text" name="company[]" class="input-field"></div>
            <div class="form-group"><label>Description</label><textarea name="job_desc[]" rows="4" class="textarea-field"></textarea><button type="button" class="ai-btn generate-bullets">✨ AI Generate</button></div>
            <button type="button" onclick="this.parentElement.remove()" style="color:red;border:none;background:none;cursor:pointer;">Remove</button>`;
        document.getElementById('experience-list').appendChild(div);
    };

    document.getElementById('add-education').onclick = function() {
        const div = document.createElement('div');
        div.className = 'education-item card';
        div.innerHTML = `
            <div class="form-group"><label>Degree</label><input type="text" name="degree[]" class="input-field"></div>
            <div class="form-group"><label>School</label><input type="text" name="school[]" class="input-field"></div>
            <button type="button" onclick="this.parentElement.remove()" style="color:red;border:none;background:none;cursor:pointer;">Remove</button>`;
        document.getElementById('education-list').appendChild(div);
    };

    // AI Calls
    async function callAI(type, data, cb, btn) {
        const oldText = btn.innerText;
        btn.innerText = '⌛...';
        btn.disabled = true;
        const fd = new FormData();
        fd.append('action', 'ats_resume_builder');
        fd.append('type', type);
        fd.append('nonce', '<?php echo wp_create_nonce("ats_analyzer_nonce"); ?>');
        for(let k in data) fd.append(k, data[k]);
        
        try {
            const res = await fetch('<?php echo admin_url("admin-ajax.php"); ?>', { method: 'POST', body: fd });
            const json = await res.json();
            if (json.success) cb(json.data.content);
            else alert(json.data.error || 'AI Error');
        } catch(e) { alert('Connection Error'); }
        finally { btn.innerText = oldText; btn.disabled = false; }
    }

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('generate-bullets')) {
            const card = e.target.closest('.experience-item');
            const title = card.querySelector('.job-title-input').value;
            if (!title) return alert('Enter Job Title');
            callAI('bullets', { title }, (val) => { card.querySelector('textarea').value = val; }, e.target);
        }
    });

    document.getElementById('generate-summary').onclick = function(e) {
        const titles = Array.from(document.querySelectorAll('.job-title-input')).map(i => i.value).join(', ');
        callAI('summary', { titles }, (val) => { document.getElementById('summary').value = val; }, e.target);
    };

    document.getElementById('suggest-skills').onclick = function(e) {
        const titles = Array.from(document.querySelectorAll('.job-title-input')).map(i => i.value).join(', ');
        callAI('skills', { titles }, (val) => { document.getElementById('skills-input').value = val; }, e.target);
    };

    // Form Submit -> Preview
    form.onsubmit = function(e) {
        e.preventDefault();
        const fd = new FormData(form);
        const data = Object.fromEntries(fd);
        
        const titles = Array.from(document.getElementsByName('job_title[]')).map(i => i.value);
        const companies = Array.from(document.getElementsByName('company[]')).map(i => i.value);
        const descs = Array.from(document.getElementsByName('job_desc[]')).map(i => i.value);
        const degrees = Array.from(document.getElementsByName('degree[]')).map(i => i.value);
        const schools = Array.from(document.getElementsByName('school[]')).map(i => i.value);

        document.getElementById('resume-preview').innerHTML = `
            <div style="text-align:center;border-bottom:2px solid #000;padding-bottom:10px;margin-bottom:20px;">
                <h1 style="font-size:24pt;margin:0;">${data.full_name || 'Your Name'}</h1>
                <p>${data.email || ''} | ${data.phone || ''} | ${data.location || ''}</p>
            </div>
            <div style="margin-bottom:15px;"><h3>Summary</h3><p>${(data.summary || '').replace(/\n/g, '<br>')}</p></div>
            <div style="margin-bottom:15px;"><h3>Experience</h3>
                ${titles.map((t, i) => t ? `<div><strong>${t}</strong> at ${companies[i]}<br>${descs[i].replace(/\n/g, '<br>')}</div>` : '').join('')}
            </div>
            <div style="margin-bottom:15px;"><h3>Education</h3>
                ${degrees.map((d, i) => d ? `<div><strong>${d}</strong> at ${schools[i]}</div>` : '').join('')}
            </div>
            <div><h3>Skills</h3><p>${data.skills || ''}</p></div>`;

        wizard.style.display = 'none';
        preview.classList.remove('hidden');
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    document.getElementById('edit-btn').onclick = function() {
        wizard.style.display = 'block';
        preview.classList.add('hidden');
    };

    document.getElementById('print-btn').onclick = () => window.print();
    
    updateUI();
});
</script>

<?php get_footer(); ?>
