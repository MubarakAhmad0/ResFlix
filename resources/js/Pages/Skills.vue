<template>
  <div class="skills-container">
    <Header />
    
    <div class="skills-section section-1">
      <h2>Programming Languages</h2>
      <div class="grid">
        <SkillCard skillName="Python">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128"><path fill="#3776ab" d="M63.397 4.797c-15.74 0-30.27 1.734-28.41 17.34l.79 6.643h27.62v3.156H17.794c-13.345 0-16.16 11.706-16.16 20.52 0 10.386 7.52 17.34 19.29 17.34h11.13v-8.27c0-8.96 7.66-16.76 16.62-16.76h19.82c7.49 0 13.45-6.14 13.45-13.63V12.12c0-7.1-5.96-7.323-13.45-7.323zm-9.45 5.53c2.56 0 4.65 2.09 4.65 4.65 0 2.56-2.09 4.65-4.65 4.65-2.56 0-4.65-2.09-4.65-4.65 0-2.56 2.09-4.65 4.65-4.65z"/><path fill="#ffd43b" d="M64.603 123.203c15.74 0 30.27-1.734 28.41-17.34l-.79-6.643h-27.62v-3.156h45.603c13.345 0 16.16-11.706 16.16-20.52 0-10.386-7.52-17.34-19.29-17.34h-11.13v8.27c0 8.96-7.66 16.76-16.62 16.76h-19.82c-7.49 0-13.45 6.14-13.45 13.63v18.996c0 7.1 5.96 7.323 13.45 7.323zm9.45-5.53c-2.56 0-4.65-2.09-4.65-4.65 0-2.56 2.09-4.65 4.65-4.65 2.56 0 4.65 2.09 4.65 4.65 0 2.56-2.09 4.65-4.65 4.65z"/></svg>
          </template>
          <template #description>A versatile, high-level programming language widely used in web development, data science, AI/ML, automation, and scripting.</template>
        </SkillCard>
        <SkillCard skillName="TypeScript">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#3178c6"/>
              <text x="64" y="90" text-anchor="middle" font-size="64" font-family="Arial, Helvetica, sans-serif" fill="#fff" font-weight="bold">TS</text>
            </svg>
          </template>
          <template #description>A strongly-typed superset of JavaScript that adds static typing, enhanced tooling, and better code maintainability for large-scale applications.</template>
        </SkillCard>
        <SkillCard skillName="Java">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <path fill="#0074BD" d="M47.617 98.12s-4.767 2.774 3.397 3.71c9.892 1.13 14.947.968 25.845-1.092 0 0 2.871 1.795 6.873 3.351-24.439 10.47-55.308-.607-36.115-5.969zm-2.988-13.665s-5.348 3.959 2.823 4.805c10.567 1.091 18.91 1.18 33.354-1.6 0 0 1.993 2.025 5.132 3.131-29.542 8.64-62.446.68-41.309-6.336z"/>
              <path fill="#EA2D2E" d="M69.802 61.271c6.025 6.935-1.58 13.17-1.58 13.17s15.289-7.891 8.269-17.777c-6.559-9.215-11.587-13.792 15.635-29.58 0 0-42.731 10.67-22.324 34.187z"/>
              <path fill="#0074BD" d="M102.123 108.229s3.529 2.91-3.888 5.159c-14.102 4.272-58.706 5.56-71.094.171-4.451-1.938 3.899-4.625 6.526-5.192 2.739-.593 4.303-.485 4.303-.485-4.953-3.487-32.013 6.85-13.743 9.815 49.821 8.076 90.817-3.637 77.896-9.468zM49.912 70.294s-22.686 5.389-8.033 7.348c6.188.828 18.518.638 30.011-.326 9.39-.789 18.813-2.474 18.813-2.474s-3.308 1.419-5.704 3.053c-23.042 6.061-67.544 3.238-54.731-2.958 10.832-5.239 19.644-4.643 19.644-4.643zm40.697 22.747c23.421-12.167 12.591-23.86 5.032-22.285-1.848.385-2.677.72-2.677.72s.688-1.079 2-1.543c14.953-5.255 26.451 15.503-4.823 23.725 0 .001.364-.327.468-.617z"/>
              <path fill="#EA2D2E" d="M76.491 1.587S89.459 14.563 64.188 34.51c-20.266 16.006-4.621 25.13-.007 35.559-11.831-10.673-20.509-20.07-14.688-28.815C58.041 28.42 81.722 22.195 76.491 1.587z"/>
              <path fill="#0074BD" d="M52.214 126.021c22.476 1.437 57-.8 57.817-11.436 0 0-1.571 4.032-18.577 7.231-19.186 3.612-42.854 3.191-56.887.874 0 .001 2.875 2.381 17.647 3.331z"/>
            </svg>
          </template>
          <template #description>A robust, object-oriented programming language used for building enterprise-scale applications, Android apps, and backend systems.</template>
        </SkillCard>
        <SkillCard skillName="C++">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <circle cx="64" cy="64" r="60" fill="#00599C"/>
              <text x="64" y="78" text-anchor="middle" font-size="44" font-family="Arial, Helvetica, sans-serif" fill="#fff" font-weight="bold">C++</text>
            </svg>
          </template>
          <template #description>A powerful, high-performance programming language used for system programming, game development, and performance-critical applications.</template>
        </SkillCard>
        <SkillCard skillName="Kotlin">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128"><defs><linearGradient id="kotlinGrad" x1="50%" y1="0%" x2="50%" y2="100%"><stop offset="0%" stop-color="#7F52FF"/><stop offset="100%" stop-color="#E68900"/></linearGradient></defs><path fill="url(#kotlinGrad)" d="M0 128V0h64L0 65.05zM64 128L128 0H64v128z"/></svg>
          </template>
          <template #description>A modern, statically-typed programming language developed by JetBrains, primarily used for Android development and cross-platform applications.</template>
        </SkillCard>
        <SkillCard skillName="JavaScript">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" fill="#f7df1e"/>
              <text x="64" y="96" text-anchor="middle" font-size="72" font-family="Arial, Helvetica, sans-serif" fill="#323330" font-weight="bold">JS</text>
            </svg>
          </template>
          <template #description>A high-level, interpreted programming language primarily used for making web pages interactive and enabling client-side and server-side development.</template>
        </SkillCard>
        <SkillCard skillName="SQL">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <ellipse cx="64" cy="32" rx="52" ry="18" fill="#e50914"/>
              <path d="M12 32v20c0 9.94 23.13 18 52 18s52-8.06 52-18V32c0 9.94-23.13 18-52 18S12 41.94 12 32z" fill="#c0070f"/>
              <path d="M12 52v20c0 9.94 23.13 18 52 18s52-8.06 52-18V52c0 9.94-23.13 18-52 18S12 61.94 12 52z" fill="#e50914"/>
              <path d="M12 72v20c0 9.94 23.13 18 52 18s52-8.06 52-18V72c0 9.94-23.13 18-52 18S12 81.94 12 72z" fill="#c0070f"/>
            </svg>
          </template>
          <template #description>Structured Query Language used for managing and manipulating relational databases, including querying, updating, and schema design.</template>
        </SkillCard>
      </div>
    </div>
    
    <div class="skills-section section-2">
      <h2>Backend</h2>
      <div class="grid">
        <SkillCard skillName="PHP">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <ellipse cx="64" cy="64" rx="62" ry="40" fill="#8892BF"/>
              <text x="64" y="72" text-anchor="middle" font-size="34" font-family="Arial, Helvetica, sans-serif" fill="#fff" font-weight="bold">PHP</text>
            </svg>
          </template>
          <template #description>A general-purpose scripting language geared towards web development.</template>
        </SkillCard>
        <SkillCard skillName="Laravel">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24px" width="24px" viewBox="0 0 128 128" version="1.1">
            <g id="surface1">
            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(229, 9, 20);fill-opacity:1;" d="M 26.027344 0.136719 C 25.824219 0.214844 20.085938 3.484375 13.28125 7.394531 C 5.035156 12.136719 0.800781 14.632812 0.574219 14.867188 C 0.394531 15.070312 0.191406 15.421875 0.128906 15.644531 C -0.0429688 16.21875 -0.0546875 100.347656 0.117188 100.953125 C 0.179688 101.1875 0.382812 101.53125 0.566406 101.722656 C 1.011719 102.191406 50.238281 130.496094 50.835938 130.632812 C 51.113281 130.699219 51.425781 130.6875 51.734375 130.601562 C 52.40625 130.433594 101.503906 102.191406 101.941406 101.730469 C 102.121094 101.53125 102.324219 101.1875 102.390625 100.953125 C 102.476562 100.675781 102.507812 96.277344 102.507812 87.015625 L 102.507812 73.480469 L 114.476562 66.605469 C 125.761719 60.117188 126.453125 59.710938 126.742188 59.265625 L 127.039062 58.785156 L 127.039062 44.207031 C 127.039062 28.335938 127.070312 29.230469 126.441406 28.65625 C 126.273438 28.507812 120.523438 25.152344 113.652344 21.195312 L 101.171875 14.015625 L 99.785156 14.015625 L 87.574219 21.027344 C 80.851562 24.894531 75.136719 28.199219 74.859375 28.378906 C 74.582031 28.5625 74.25 28.902344 74.113281 29.148438 L 73.867188 29.574219 L 73.8125 43.308594 L 73.761719 57.046875 L 63.679688 62.855469 C 58.132812 66.042969 53.515625 68.683594 53.417969 68.707031 C 53.238281 68.757812 53.226562 67.449219 53.226562 42.203125 L 53.226562 15.632812 L 52.960938 15.175781 C 52.628906 14.621094 54.121094 15.507812 39.136719 6.894531 C 26.570312 -0.332031 26.871094 -0.179688 26.027344 0.136719 Z M 37.578125 10.65625 C 42.835938 13.671875 47.136719 16.167969 47.136719 16.199219 C 47.136719 16.230469 42.527344 18.894531 36.894531 22.132812 L 26.644531 28.015625 L 16.414062 22.132812 C 10.792969 18.894531 6.1875 16.230469 6.1875 16.199219 C 6.1875 16.167969 10.785156 13.503906 16.40625 10.273438 L 26.613281 4.402344 L 27.316406 4.785156 C 27.710938 5 32.332031 7.640625 37.578125 10.65625 Z M 110.730469 24.191406 C 116.265625 27.378906 120.84375 30.011719 120.886719 30.054688 C 121.003906 30.160156 100.703125 41.828125 100.425781 41.816406 C 100.148438 41.808594 80.097656 30.246094 80.105469 30.105469 C 80.117188 29.945312 100.289062 18.339844 100.492188 18.371094 C 100.585938 18.394531 105.195312 21.015625 110.730469 24.191406 Z M 14.828125 25.875 L 24.585938 31.492188 L 24.640625 59.304688 L 24.691406 87.121094 L 24.929688 87.496094 C 25.054688 87.695312 25.289062 87.964844 25.460938 88.089844 C 25.621094 88.207031 31.050781 91.300781 37.523438 94.953125 L 49.28125 101.59375 L 49.28125 113.359375 C 49.28125 119.816406 49.238281 125.113281 49.183594 125.113281 C 49.140625 125.113281 38.976562 119.296875 26.601562 112.175781 L 4.105469 99.238281 L 4.074219 59.464844 L 4.054688 19.703125 L 4.554688 19.980469 C 4.84375 20.132812 9.460938 22.785156 14.828125 25.875 Z M 49.28125 45.453125 L 49.28125 71.082031 L 48.886719 71.339844 C 48.351562 71.679688 28.8125 82.910156 28.746094 82.910156 C 28.714844 82.910156 28.691406 71.339844 28.691406 57.195312 L 28.703125 31.492188 L 38.910156 25.621094 C 44.523438 22.390625 49.152344 19.769531 49.207031 19.789062 C 49.246094 19.8125 49.28125 31.363281 49.28125 45.453125 Z M 88.222656 39.558594 L 98.453125 45.441406 L 98.453125 57.101562 C 98.453125 68.164062 98.441406 68.757812 98.273438 68.695312 C 98.164062 68.652344 93.535156 66 87.980469 62.800781 L 77.867188 56.992188 L 77.867188 45.335938 C 77.867188 38.917969 77.898438 33.675781 77.929688 33.675781 C 77.972656 33.675781 82.601562 36.320312 88.222656 39.558594 Z M 123.09375 45.261719 C 123.09375 51.644531 123.050781 56.910156 123.007812 56.960938 C 122.933594 57.078125 102.699219 68.738281 102.570312 68.738281 C 102.539062 68.738281 102.507812 63.496094 102.507812 57.078125 L 102.507812 45.421875 L 112.714844 39.546875 C 118.335938 36.320312 122.964844 33.675781 123.007812 33.675781 C 123.0625 33.675781 123.09375 38.886719 123.09375 45.261719 Z M 86.230469 66.46875 C 94.835938 71.421875 96.320312 72.308594 96.171875 72.425781 C 96.074219 72.488281 92.8125 74.363281 88.929688 76.582031 C 85.046875 78.796875 74.988281 84.53125 66.570312 89.328125 L 51.273438 98.054688 L 50.785156 97.789062 C 47.863281 96.191406 30.910156 86.546875 30.910156 86.472656 C 30.902344 86.3125 75.765625 60.53125 75.945312 60.597656 C 76.03125 60.628906 80.660156 63.269531 86.230469 66.46875 Z M 98.433594 87.558594 L 98.398438 99.238281 L 75.914062 112.175781 C 63.542969 119.296875 53.375 125.113281 53.324219 125.113281 C 53.269531 125.113281 53.226562 120.359375 53.226562 113.359375 L 53.226562 101.59375 L 75.765625 88.742188 C 88.148438 81.675781 98.324219 75.890625 98.378906 75.878906 C 98.421875 75.878906 98.441406 81.132812 98.433594 87.558594 Z M 98.433594 87.558594 "/>
            </g>
            </svg>
          </template>
          <template #description>A popular open-source PHP web framework used for building robust web applications following the model-view-controller (MVC) architectural pattern.</template>
        </SkillCard>
        <SkillCard skillName="Node.js">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128"><path fill="#83CD29" d="M106.142 69.501L69.55 111.41c-2.483 2.762-6.848 2.762-9.327-.002L23.625 69.501c-2.364-2.635-1.812-6.742 1.221-8.463L35.52 54.987v29.486c0 1.595.863 3.152 2.244 3.937l23.658 13.455c1.381.784 3.107.784 4.488 0l23.657-13.455c1.382-.785 2.245-2.342 2.245-3.937V55.373l11.084 6.052c2.945 1.606 3.566 5.707 1.246 8.076zM64 13.73l46.427 25.458L64 64.646 17.573 39.188z"/></svg>
          </template>
          <template #description>A cross-platform, open-source JavaScript runtime environment that executes JavaScript code outside a web browser, enabling server-side scripting.</template>
        </SkillCard>
        <SkillCard skillName="Next.js">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#000"/>
              <text x="64" y="96" text-anchor="middle" font-size="80" font-family="Arial, Helvetica, sans-serif" fill="#fff" font-weight="bold">N</text>
            </svg>
          </template>
          <template #description>A React framework for building server-side rendered and statically generated web applications with file-based routing and API routes.</template>
        </SkillCard>
        <SkillCard skillName="Express">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#333"/>
              <text x="64" y="82" text-anchor="middle" font-size="50" font-family="Arial, Helvetica, sans-serif" fill="#fff" font-weight="bold">Ex</text>
            </svg>
          </template>
          <template #description>A minimal and flexible Node.js web application framework that provides a robust set of features for web and mobile applications.</template>
        </SkillCard>
        <SkillCard skillName="Flask">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <path fill="#333" d="M48 8h32v40l28 56a8 8 0 01-7.2 11.5H27.2A8 8 0 0120 104l28-56V8z"/>
              <path fill="#555" d="M48 64l-22 44h72L76 64H48z"/>
              <rect x="44" y="8" width="40" height="6" rx="3" fill="#888"/>
            </svg>
          </template>
          <template #description>A lightweight WSGI web application framework for Python, designed for quick and easy development of web applications and APIs.</template>
        </SkillCard>
        <SkillCard skillName="FastAPI">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#009688"/>
              <polygon points="72,12 36,72 60,72 56,116 92,56 68,56" fill="#fff"/>
            </svg>
          </template>
          <template #description>A modern, fast web framework for building APIs with Python 3.7+ based on standard Python type hints and automatic documentation.</template>
        </SkillCard>
        <SkillCard skillName="Django">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#092E20"/>
              <text x="64" y="90" text-anchor="middle" font-size="62" font-family="Georgia, serif" fill="#fff" font-weight="bold">Dj</text>
            </svg>
          </template>
          <template #description>A high-level Python web framework that encourages rapid development and clean, pragmatic design with built-in admin, ORM, and authentication.</template>
        </SkillCard>
      </div>
    </div>
    
    <div class="skills-section section-3">
      <h2>Frontend</h2>
      <div class="grid">
        <SkillCard skillName="Vue.js">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128"><path d="M0 8.934l49.854.158 14.167 24.47 14.432-24.47L128 8.935l-63.834 110.14zm126.98.637l-24.36.02-38.476 66.053L25.691 9.592.942 9.572l63.211 107.89zm-25.149-.008l-22.745.168-15.053 24.647L49.216 9.73l-22.794-.168 37.731 64.476zm-75.834-.17l23.002.009m-23.002-.01l23.002.01" fill="none"/><path d="M25.997 9.393l23.002.009L64.035 34.36 79.018 9.404 102 9.398 64.15 75.053z" fill="#35495e"/><path d="M.91 9.569l25.067-.172 38.15 65.659L101.98 9.401l25.11.026-62.966 108.06z" fill="#41b883"/></svg>
          </template>
          <template #description>A progressive JavaScript framework for building user interfaces and single-page applications, known for its approachability, performance, and versatility.</template>
        </SkillCard>
        <SkillCard skillName="JavaScript">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" fill="#f7df1e"/>
              <text x="64" y="96" text-anchor="middle" font-size="72" font-family="Arial, Helvetica, sans-serif" fill="#323330" font-weight="bold">JS</text>
            </svg>
          </template>
          <template #description>A high-level, interpreted programming language primarily used for making web pages interactive and dynamic, enabling client-side scripting and increasingly server-side development.</template>
        </SkillCard>
        <SkillCard skillName="Tailwind CSS">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128"><path d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597 6.398-8.531 13.867-11.73 22.398-9.597 4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602-6.399 8.536-13.867 11.735-22.399 9.602-4.87-1.215-8.347-4.746-12.207-8.66-6.27-6.367-13.53-13.738-29.394-13.738zM32.004 64c-17.066 0-27.73 8.531-32 25.602C6.402 81.066 13.87 77.867 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66 6.274 6.367 13.536 13.738 29.395 13.738 17.066 0 27.73-8.53 32-25.597-6.399 8.531-13.867 11.73-22.399 9.597-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64zm0 0" fill="#38bdf8"/></svg>
          </template>
          <template #description>A utility-first CSS framework that provides low-level utility classes to build custom designs without leaving your HTML, promoting rapid UI development.</template>
        </SkillCard>
        <SkillCard skillName="Bootstrap">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128"><defs><linearGradient id="a" x1="76.079" x2="523.48" y1="10.798" y2="365.95" gradientTransform="translate(1.11 14.613) scale(.24566)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#9013fe"/><stop offset="1" stop-color="#6610f2"/></linearGradient><linearGradient id="b" x1="193.51" x2="293.51" y1="109.74" y2="278.87" gradientTransform="translate(0 52)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#f1e5fc"/></linearGradient><filter id="c" width="197" height="249" x="161.9" y="135.46" color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/><feOffset dy="4"/><feGaussianBlur stdDeviation="8"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/><feBlend in2="BackgroundImageFix" result="effect1_dropShadow"/><feBlend in="SourceGraphic" in2="effect1_dropShadow" result="shape"/></filter></defs><path fill="url(#a)" d="M14.985 27.712c-.237-6.815 5.072-13.099 12.249-13.099h73.54c7.177 0 12.486 6.284 12.249 13.099-.228 6.546.068 15.026 2.202 21.94 2.141 6.936 5.751 11.319 11.664 11.883v6.387c-5.913.564-9.523 4.947-11.664 11.883-2.134 6.914-2.43 15.394-2.202 21.94.237 6.815-5.072 13.098-12.249 13.098h-73.54c-7.177 0-12.486-6.284-12.249-13.098.228-6.546-.068-15.026-2.203-21.94-2.14-6.935-5.76-11.319-11.673-11.883v-6.387c5.913-.563 9.533-4.947 11.673-11.883 2.135-6.914 2.43-15.394 2.203-21.94z"/><path fill="url(#b)" d="M267.1 364.46c47.297 0 75.798-23.158 75.798-61.355 0-28.873-20.336-49.776-50.532-53.085v-1.203c22.185-3.609 39.594-24.211 39.594-47.219 0-32.783-25.882-54.138-65.322-54.138h-88.74v217zm-54.692-189.48h45.911c24.958 0 39.131 11.128 39.131 31.279 0 21.505-16.484 33.535-46.372 33.535h-38.67zm0 161.96v-71.431h45.602c32.661 0 49.608 12.03 49.608 35.49 0 23.459-16.484 35.941-47.605 35.941z" filter="url(#c)" transform="translate(1.494 2.203) scale(.24566)"/></svg>
          </template>
          <template #description>A popular front-end framework for developing responsive and mobile-first websites, featuring a collection of CSS and JavaScript components.</template>
        </SkillCard>
      </div>
    </div>
    
    <div class="skills-section section-4">
      <h2>Database</h2>
      <div class="grid">
        <SkillCard skillName="MySQL">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#00758F"/>
              <text x="64" y="78" text-anchor="middle" font-size="28" font-family="Arial, Helvetica, sans-serif" fill="#fff" font-weight="bold">MySQL</text>
            </svg>
          </template>
          <template #description>An open-source relational database management system (RDBMS) that uses Structured Query Language (SQL) to manage and organize data in tables with predefined relationships.</template>
        </SkillCard>
        <SkillCard skillName="PostgreSQL">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#336791"/>
              <text x="64" y="78" text-anchor="middle" font-size="28" font-family="Arial, Helvetica, sans-serif" fill="#fff" font-weight="bold">PgSQL</text>
            </svg>
          </template>
          <template #description>An advanced, open-source relational database management system known for its robustness, extensibility, and support for complex queries and large datasets.</template>
        </SkillCard>
      </div>
    </div>
    
    <div class="skills-section section-5">
      <h2>Other</h2>
      <div class="grid">
        <SkillCard skillName="Git">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="16" fill="#F05032"/>
              <circle cx="40" cy="88" r="12" fill="#fff"/>
              <circle cx="88" cy="40" r="12" fill="#fff"/>
              <circle cx="88" cy="88" r="12" fill="#fff"/>
              <line x1="40" y1="88" x2="88" y2="40" stroke="#fff" stroke-width="10" stroke-linecap="round"/>
              <line x1="88" y1="40" x2="88" y2="88" stroke="#fff" stroke-width="10" stroke-linecap="round"/>
            </svg>
          </template>
          <template #description>A distributed version control system for tracking changes in source code during software development.</template>
        </SkillCard>
        <SkillCard skillName="Docker">
          <template #icon>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 128 128">
              <rect width="128" height="128" rx="6" fill="#2496ED"/>
              <rect x="20" y="56" width="18" height="14" rx="2" fill="#fff"/>
              <rect x="42" y="56" width="18" height="14" rx="2" fill="#fff"/>
              <rect x="64" y="56" width="18" height="14" rx="2" fill="#fff"/>
              <rect x="42" y="38" width="18" height="14" rx="2" fill="#fff"/>
              <rect x="64" y="38" width="18" height="14" rx="2" fill="#fff"/>
              <rect x="64" y="20" width="18" height="14" rx="2" fill="#fff"/>
              <path d="M18 76 Q20 96 64 96 Q100 96 108 80 Q116 76 112 70 Q108 70 106 74 Q100 86 64 86 Q28 86 22 74 Z" fill="#fff"/>
              <path d="M108 70 Q118 60 114 50 Q110 55 108 62 Z" fill="#fff"/>
            </svg>
          </template>
          <template #description>A platform for developing, shipping, and running applications in containers, enabling consistent environments across various stages of development.</template>
        </SkillCard>
      </div>
    </div>
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue';
import SkillCard from '@/Components/SkillCard.vue';
</script>

<style scoped>
@font-face {
  font-family: 'BebasNeue';
  src: url('/fonts/BebasNeue.otf') format('opentype');
}

.skills-container {
  text-align: center;
  padding-top: 100px;
  padding-bottom: 60px;
}

.skills-section {
  margin-top: 40px;
}

h2 {
  margin-bottom: 20px;
  font-size: 32px;
  font-family: 'BebasNeue', sans-serif;
  font-weight: bold;
  text-decoration: underline;
  text-decoration-color: #e50914;
  text-underline-offset: 7px;
  text-decoration-thickness: 2px;
}

.grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 32px;
}

/* ── Custom Animations ─────────────────────────────── */

/* 1. Simple fade and drift for headers */
@keyframes simpleFade {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* 2. Softer, elegant pop for cards */
@keyframes softPop {
  0% {
    opacity: 0;
    transform: scale(0.85) translateY(20px);
  }
  70% {
    opacity: 1;
    transform: scale(1.02) translateY(-2px);
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

/* Base styles for the animated elements */
.skills-section h2 {
  opacity: 0;
  animation: simpleFade 0.6s ease-out forwards;
}

.grid > * {
  opacity: 0;
  animation: softPop 0.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
}

/* ── Strict Sequential Stagger Logic (Bulletproof) ───── */

/* Section 1 (Programming Languages - 7 cards) */
.section-1 h2 { animation-delay: 0.10s; }
.section-1 .grid > *:nth-child(1) { animation-delay: 0.15s; }
.section-1 .grid > *:nth-child(2) { animation-delay: 0.20s; }
.section-1 .grid > *:nth-child(3) { animation-delay: 0.25s; }
.section-1 .grid > *:nth-child(4) { animation-delay: 0.30s; }
.section-1 .grid > *:nth-child(5) { animation-delay: 0.35s; }
.section-1 .grid > *:nth-child(6) { animation-delay: 0.40s; }
.section-1 .grid > *:nth-child(7) { animation-delay: 0.45s; }

/* Section 2 (Backend - 8 cards) */
.section-2 h2 { animation-delay: 0.55s; }
.section-2 .grid > *:nth-child(1) { animation-delay: 0.60s; }
.section-2 .grid > *:nth-child(2) { animation-delay: 0.65s; }
.section-2 .grid > *:nth-child(3) { animation-delay: 0.70s; }
.section-2 .grid > *:nth-child(4) { animation-delay: 0.75s; }
.section-2 .grid > *:nth-child(5) { animation-delay: 0.80s; }
.section-2 .grid > *:nth-child(6) { animation-delay: 0.85s; }
.section-2 .grid > *:nth-child(7) { animation-delay: 0.90s; }
.section-2 .grid > *:nth-child(8) { animation-delay: 0.95s; }

/* Section 3 (Frontend - 4 cards) */
.section-3 h2 { animation-delay: 1.05s; }
.section-3 .grid > *:nth-child(1) { animation-delay: 1.10s; }
.section-3 .grid > *:nth-child(2) { animation-delay: 1.15s; }
.section-3 .grid > *:nth-child(3) { animation-delay: 1.20s; }
.section-3 .grid > *:nth-child(4) { animation-delay: 1.25s; }

/* Section 4 (Database - 2 cards) */
.section-4 h2 { animation-delay: 1.35s; }
.section-4 .grid > *:nth-child(1) { animation-delay: 1.40s; }
.section-4 .grid > *:nth-child(2) { animation-delay: 1.45s; }

/* Section 5 (Other - 2 cards) */
.section-5 h2 { animation-delay: 1.55s; }
.section-5 .grid > *:nth-child(1) { animation-delay: 1.60s; }
.section-5 .grid > *:nth-child(2) { animation-delay: 1.65s; }

</style>